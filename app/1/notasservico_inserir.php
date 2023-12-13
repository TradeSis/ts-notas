<?php
// helio 31012023 criacao
//echo "-ENTRADA->".json_encode($jsonEntrada)."\n";

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
    $LOG_NIVEL = defineNivelLog();
    $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "notasservico_inserir";
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

if (isset($jsonEntrada['idPessoaPrestador'])) {
    $idPessoaPrestador  = isset($jsonEntrada['idPessoaPrestador'])  && $jsonEntrada['idPessoaPrestador'] !== "" && $jsonEntrada['idPessoaPrestador'] !== "null" ? "'" . $jsonEntrada['idPessoaPrestador']. "'"  : "null";
    $idPessoaTomador  = isset($jsonEntrada['idPessoaTomador'])  && $jsonEntrada['idPessoaTomador'] !== "" && $jsonEntrada['idPessoaTomador'] !== "null" ? "'" . $jsonEntrada['idPessoaTomador']. "'"  : "null";
    $serieRPS  = isset($jsonEntrada['serieRPS'])  && $jsonEntrada['serieRPS'] !== "" && $jsonEntrada['serieRPS'] !== "null" ? "'" . $jsonEntrada['serieRPS']. "'"  : "null";
    $numeroRPS  = isset($jsonEntrada['numeroRPS'])  && $jsonEntrada['numeroRPS'] !== "" && $jsonEntrada['numeroRPS'] !== "null" ? "'" . $jsonEntrada['numeroRPS']. "'"  : "null";
    $tipoRPS  = isset($jsonEntrada['tipoRPS'])  && $jsonEntrada['tipoRPS'] !== "" && $jsonEntrada['tipoRPS'] !== "null" ? "'" . $jsonEntrada['tipoRPS']. "'"  : "null";
    $valorNota  = isset($jsonEntrada['valorNota'])  && $jsonEntrada['valorNota'] !== "" && $jsonEntrada['valorNota'] !== "null" ? "'" . $jsonEntrada['valorNota']. "'"  : "null";
    $codMunicipio  = isset($jsonEntrada['codMunicipio'])  && $jsonEntrada['codMunicipio'] !== "" && $jsonEntrada['codMunicipio'] !== "null" ? "'" . $jsonEntrada['codMunicipio']. "'"  : "null";
    $condicao  = isset($jsonEntrada['condicao'])  && $jsonEntrada['condicao'] !== "" && $jsonEntrada['condicao'] !== "null" ? "'" . $jsonEntrada['condicao']. "'"  : "null";
    $descricaoServico  = isset($jsonEntrada['descricaoServico'])  && $jsonEntrada['descricaoServico'] !== "" && $jsonEntrada['descricaoServico'] !== "null" ? "'" . $jsonEntrada['descricaoServico']. "'"  : "null";
    $dataFaturamento  = isset($jsonEntrada['dataFaturamento'])  && $jsonEntrada['dataFaturamento'] !== "" && $jsonEntrada['dataFaturamento'] !== "null" ? "'" . $jsonEntrada['dataFaturamento']. "'"  : "null";
    $dataEmissao  = isset($jsonEntrada['dataEmissao'])  && $jsonEntrada['dataEmissao'] !== "" && $jsonEntrada['dataEmissao'] !== "null" ? "'" . $jsonEntrada['dataEmissao']. "'"  : "null";


    $sql = "INSERT INTO `notasservico`(`idPessoaPrestador`, `idPessoaTomador`, `serieRPS`, `numeroRPS`, `tipoRPS`, `valorNota`,`codMunicipio`, `condicao`, `descricaoServico`, `dataFaturamento`, `dataEmissao`) 
                               VALUES ($idPessoaPrestador,$idPessoaTomador,$serieRPS,$numeroRPS,$tipoRPS,$valorNota,$codMunicipio,$condicao, $descricaoServico, $dataFaturamento, $dataEmissao)";

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
