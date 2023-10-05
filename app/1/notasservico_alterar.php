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
    $idCliente = $jsonEntrada['idCliente'];
    $dataFaturamento = $jsonEntrada['dataFaturamento'];
    $dataEmissao = $jsonEntrada['dataEmissao'];
    $serieNota = $jsonEntrada['serieNota'];
    $numeroNota = isset($jsonEntrada['numeroNota']) && $jsonEntrada['numeroNota'] !== "" ? "'" . mysqli_real_escape_string($conexao, $jsonEntrada['numeroNota']) . "'" : "null";
    $serieRPS = $jsonEntrada['serieRPS'];
    $numeroRPS = isset($jsonEntrada['numeroRPS']) && $jsonEntrada['numeroRPS'] !== "" ? "'" . mysqli_real_escape_string($conexao, $jsonEntrada['numeroRPS']) . "'" : "null";
    $valorNota = $jsonEntrada['valorNota'];
    $statusNota = $jsonEntrada['statusNota'];
    $condicao = $jsonEntrada['condicao'];

    $sql = "UPDATE `notasservico` SET `idCliente`= $idCliente,`dataFaturamento`= '$dataFaturamento',`dataEmissao`= '$dataEmissao',`serieNota`='$serieNota',
    `numeroNota`= $numeroNota,`serieRPS`='$serieRPS',`numeroRPS`= $numeroRPS,`valorNota`='$valorNota',`statusNota`= $statusNota,`condicao`='$condicao' 
    WHERE notasservico.idNotaServico = $idNotaServico";

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
