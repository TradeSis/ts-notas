<?php

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
    $LOG_NIVEL = defineNivelLog();
    $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "consultarNota";
    if (isset($LOG_NIVEL)) {
        if ($LOG_NIVEL >= 1) {
            $arquivo = fopen(defineCaminhoLog() . "notasservico_" . date("dmY") . ".log", "a");
        }
    }
}
if (isset($LOG_NIVEL)) {
    if ($LOG_NIVEL == 1) {
        fwrite($arquivo, $identificacao . "\n");
    }
    if ($LOG_NIVEL >= 2) {
        fwrite($arquivo, $identificacao . "-ENTRADA->" . json_encode($jsonEntrada) . "\n");
    }
}
//LOG

$idEmpresa = $jsonEntrada["idEmpresa"];
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['idNotaServico'])) {

    $idNotaServico = $jsonEntrada['idNotaServico'];

    //Busca parametros nota
    $sql_parametros = "SELECT * FROM notasparametros where idEmpresa = $idEmpresa";
    $buscar_parametros = mysqli_query($conexao, $sql_parametros);
    $parametros = mysqli_fetch_array($buscar_parametros, MYSQLI_ASSOC);

    //Verifica dados da nota
    $sql_consulta = "SELECT * FROM notasservico WHERE idNotaServico = $idNotaServico";
    $buscar_consulta = mysqli_query($conexao, $sql_consulta);
    $row_consulta = mysqli_fetch_array($buscar_consulta, MYSQLI_ASSOC);

    $idProvedor = $row_consulta['idProvedor'];

    //Chamar Function para emitir nota nuvemFiscal
    $config = NuvemFiscal\Configuration::getDefaultConfiguration()
        ->setHost('https://api.sandbox.nuvemfiscal.com.br')
        ->setApiKey('Authorization', 'Bearer')
        ->setAccessToken($parametros['access_token']);
    $apiInstance = new NuvemFiscal\Api\NfseApi(
        new GuzzleHttp\Client(),
        $config
    );
    $dadosNFSE = $apiInstance->consultarNfse($idProvedor);

    //LOG
    if (isset($LOG_NIVEL)) {
        if ($LOG_NIVEL >= 3) {
            fwrite($arquivo, $identificacao . "-dadosNFSE->" . $dadosNFSE . "\n");
        }
    }
    //LOG

    if ($dadosNFSE['status'] == "autorizada") {

        $statusNota = 2; //Autorizada/Emitida
        $retornoNFSE = null;
        $dataEmissao = $dadosNFSE['data_emissao']->format('Y-m-d H:i:s');
        $serie = $dadosNFSE->getDPS()->getSerie();
        $nDPS = $dadosNFSE->getDPS()->getNDPS();

        $sql = "UPDATE `notasservico` SET `statusNota`='$statusNota', `dataEmissao`='$dataEmissao', `url`='" . $dadosNFSE['link_url'] . "', `CodVerifica`='" . $dadosNFSE['codigo_verificacao'] . "',
       `serieDPS`='$serie', `numeroDPS`='$nDPS', `serieNota`='$serie', `numeroNota`='" . $dadosNFSE['numero'] . "'
       WHERE idNotaServico = $idNotaServico";
    } else {
        $statusNota = 3; //Aberto/Negada
        $retornoNFSE = $dadosNFSE['mensagens'][0]['descricao'];
        $sql = "UPDATE `notasservico` SET `statusNota`='$statusNota' WHERE idNotaServico = $idNotaServico";
    }


    //LOG
    if (isset($LOG_NIVEL)) {
        if ($LOG_NIVEL >= 3) {
            fwrite($arquivo, $identificacao . "-SQL->" . $sql . "\n");
        }
    }
    //LOG

    //TRY-CATCH
    try {

        $atualizar = mysqli_query($conexao, $sql);
        if (!$atualizar)
            throw new Exception(mysqli_error($conexao));

        $jsonSaida = array(
            "status" => 200,
            "retorno" => "ok",
            "erroNFSE" => $retornoNFSE
        );
    } catch (Exception $e) {
        $jsonSaida = array(
            "status" => 500,
            "retorno" => $e->getMessage()
        );
        if ($LOG_NIVEL >= 1) {
            fwrite($arquivo, $identificacao . "-ERRO->" . $e->getMessage() . "\n");
        }
    } finally {
        // ACAO EM CASO DE ERRO (CATCH), que mesmo assim precise
    }
    //TRY-CATCH
} else {
    $jsonSaida = array(
        "status" => 400,
        "retorno" => "Faltaram parametros"
    );
}

//LOG
if (isset($LOG_NIVEL)) {
    if ($LOG_NIVEL >= 2) {
        fwrite($arquivo, $identificacao . "-SAIDA->" . json_encode($jsonSaida) . "\n\n");
    }
}
//LOG