<?php
// helio 31012023 criacao
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
    $LOG_NIVEL = defineNivelLog();
    $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "notasservico_alterar";
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
    //Verifica dados da nota
    $sql_consulta = "SELECT * FROM notasservico WHERE idNotaServico = $idNotaServico";
    $buscar_consulta = mysqli_query($conexao, $sql_consulta);
    $row_consulta = mysqli_fetch_array($buscar_consulta, MYSQLI_ASSOC);
    
    $idPessoaPrestador  = isset($jsonEntrada['idPessoaPrestador'])  && $jsonEntrada['idPessoaPrestador'] !== "" && $jsonEntrada['idPessoaPrestador'] !== "null" ? "'" . $jsonEntrada['idPessoaPrestador']. "'"  : "'" . $row_consulta['idPessoaPrestador']. "'";
    $idPessoaTomador  = isset($jsonEntrada['idPessoaTomador'])  && $jsonEntrada['idPessoaTomador'] !== "" && $jsonEntrada['idPessoaTomador'] !== "null" ? "'" . $jsonEntrada['idPessoaTomador']. "'"  : "'" . $row_consulta['idPessoaTomador']. "'";
    $serieRPS  = isset($jsonEntrada['serieRPS'])  && $jsonEntrada['serieRPS'] !== "" && $jsonEntrada['serieRPS'] !== "null" ? "'" . $jsonEntrada['serieRPS']. "'"  : "'" . $row_consulta['serieRPS']. "'";
    $numeroRPS  = isset($jsonEntrada['numeroRPS'])  && $jsonEntrada['numeroRPS'] !== "" && $jsonEntrada['numeroRPS'] !== "null" ? "'" . $jsonEntrada['numeroRPS']. "'"  : "'" . $row_consulta['numeroRPS']. "'";
    $tipoRPS  = isset($jsonEntrada['tipoRPS'])  && $jsonEntrada['tipoRPS'] !== "" && $jsonEntrada['tipoRPS'] !== "null" ? "'" . $jsonEntrada['tipoRPS']. "'"  : "'" . $row_consulta['tipoRPS']. "'";
    $valorNota  = isset($jsonEntrada['valorNota'])  && $jsonEntrada['valorNota'] !== "" && $jsonEntrada['valorNota'] !== "null" ? "'" . $jsonEntrada['valorNota']. "'"  : "'" . $row_consulta['valorNota']. "'";
    $codMunicipio  = isset($jsonEntrada['codMunicipio'])  && $jsonEntrada['codMunicipio'] !== "" && $jsonEntrada['codMunicipio'] !== "null" ? "'" . $jsonEntrada['codMunicipio']. "'"  : "'" . $row_consulta['codMunicipio']. "'";
    $condicao  = isset($jsonEntrada['condicao'])  && $jsonEntrada['condicao'] !== "" && $jsonEntrada['condicao'] !== "null" ? "'" . $jsonEntrada['condicao']. "'"  : "'" . $row_consulta['condicao']. "'";
    $descricaoServico  = isset($jsonEntrada['descricaoServico'])  && $jsonEntrada['descricaoServico'] !== "" && $jsonEntrada['descricaoServico'] !== "null" ? "'" . $jsonEntrada['descricaoServico']. "'"  : "'" . $row_consulta['descricaoServico']. "'";
    $dataFaturamento  = isset($jsonEntrada['dataFaturamento'])  && $jsonEntrada['dataFaturamento'] !== "" && $jsonEntrada['dataFaturamento'] !== "null" ? "'" . $jsonEntrada['dataFaturamento']. "'"  : "'" . $row_consulta['dataFaturamento']. "'";
    $dataEmissao  = isset($jsonEntrada['dataEmissao'])  && $jsonEntrada['dataEmissao'] !== "" && $jsonEntrada['dataEmissao'] !== "null" ? "'" . $jsonEntrada['dataEmissao']. "'"  : "'" . $row_consulta['dataEmissao']. "'";

    $sql = "UPDATE `notasservico` SET `idPessoaPrestador`= $idPessoaPrestador,`idPessoaTomador`=$idPessoaTomador,`serieRPS`=$serieRPS,`numeroRPS`=$numeroRPS,`tipoRPS`=$tipoRPS,
    `valorNota`= $valorNota,`codMunicipio`=$codMunicipio,`condicao`=$condicao,`descricaoServico`=$descricaoServico,`dataFaturamento`=$dataFaturamento,`dataEmissao`=$dataEmissao
    WHERE idNotaServico = $idNotaServico";

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
            "retorno" => "ok"
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
