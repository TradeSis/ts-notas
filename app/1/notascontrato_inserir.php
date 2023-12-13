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
if (isset($jsonEntrada['idContrato'])) {
    $idContrato = $jsonEntrada['idContrato'];
    $idPessoa = $jsonEntrada['idPessoa'];
    $serieNota = $jsonEntrada['serieNota'];
    $numeroNota = $jsonEntrada['numeroNota'];
    $serieRPS = $jsonEntrada['serieRPS'];
    $numeroRPS = $jsonEntrada['numeroRPS'];
    $tipoRPS = $jsonEntrada['tipoRPS'];
    $valorNota = $jsonEntrada['valorNota'];
    $statusNota = STATUSNOTA_PADRAO;
    $condicao = $jsonEntrada['condicao'];

    $sql = "INSERT INTO `notasservico`(`idPessoa`, `serieNota`, `numeroNota`, `serieRPS`, `numeroRPS`, `tipoRPS`, `valorNota`, `statusNota`, `condicao`) 
                               VALUES ('$idPessoa','$serieNota','$numeroNota','$serieRPS','$numeroRPS','$tipoRPS','$valorNota','$statusNota','$condicao')";

    //LOG
    if (isset($LOG_NIVEL)) {
        if ($LOG_NIVEL >= 3) {
            fwrite($arquivo, $identificacao . "-SQL->" . $sql . "\n");
        }
    }
    //LOG

    //TRY-CATCH
    try {

        $atualizar1 = mysqli_query($conexao, $sql);
        $idGerado = mysqli_insert_id($conexao); 
        $sql2 = "INSERT INTO notascontrato (idNotaServico, idContrato) VALUES ( " . $idGerado . ", '$idContrato ')";
        
   /* echo $sql2; */
        $atualizar2 = mysqli_query($conexao, $sql2);
 
        if (!$atualizar1 && !$atualizar2)
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
