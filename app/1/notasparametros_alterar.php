<?php
$conexao = conectaMysql(null);

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
    $LOG_NIVEL = defineNivelLog();
    $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "notasparametros_alterar";
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

if (isset($jsonEntrada['idParametros'])) {
    $idParametros = $jsonEntrada['idParametros'];
    $idEmpresa = $jsonEntrada['idEmpresa'];
    $fornecedor = $jsonEntrada['fornecedor'];
    $access_token = $jsonEntrada['access_token'];
    $provedor = $jsonEntrada['provedor'];
    $ambiente = $jsonEntrada['ambiente'];
    $tpAmb = $jsonEntrada['tpAmb'];
    $verAplic = $jsonEntrada['verAplic'];
    $cTribNac = $jsonEntrada['cTribNac'];
    $cNBS = $jsonEntrada['cNBS'];
    $tribISSQN = $jsonEntrada['tribISSQN'];
    $tpRetISSQN = $jsonEntrada['tpRetISSQN'];
    $CST = $jsonEntrada['CST'];
    $pAliqPis = $jsonEntrada['pAliqPis'];
    $pAliqCofins = $jsonEntrada['pAliqCofins'];
    $tpRetPisCofins = $jsonEntrada['tpRetPisCofins'];
    $vTotTribFed = $jsonEntrada['vTotTribFed'];
    $vTotTribEst = $jsonEntrada['vTotTribEst'];
    $vTotTribMun = $jsonEntrada['vTotTribMun'];

    $sql = "UPDATE notasparametros SET `idParametros`=$idParametros,`idEmpresa`=$idEmpresa,`fornecedor`='$fornecedor',`access_token`='$access_token',
                `provedor`='$provedor',`ambiente`='$ambiente',`tpAmb`=$tpAmb,`verAplic`='$verAplic',`cTribNac`=$cTribNac,`cNBS`=$cNBS,`tribISSQN`=$tribISSQN,
                `tpRetISSQN`=$tpRetISSQN,`CST`=$CST,`pAliqPis`=$pAliqPis,`pAliqCofins`=$pAliqCofins,`tpRetPisCofins`=$tpRetPisCofins,
                `vTotTribFed`=$vTotTribFed,`vTotTribEst`=$vTotTribEst,`vTotTribMun`=$vTotTribMun WHERE `idParametros`=$idParametros";

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
