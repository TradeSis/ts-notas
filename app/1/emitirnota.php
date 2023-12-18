<?php
//gabriel 04122023

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
  $LOG_NIVEL = defineNivelLog();
  $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "emitirNota";
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

date_default_timezone_set('America/Sao_Paulo');
$idEmpresa = $jsonEntrada["idEmpresa"];
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['idNotaServico'])) {

  $idNotaServico = $jsonEntrada['idNotaServico'];
  $dataEmissao = date('Y-m-d H:i:s');

  //Busca parametros nota
  $sql_parametros = "SELECT * FROM notasparametros where idEmpresa = $idEmpresa";
  $buscar_parametros = mysqli_query($conexao, $sql_parametros);
  $parametros = mysqli_fetch_array($buscar_parametros, MYSQLI_ASSOC);

  if ($parametros['fornecedor'] === "nuvemfiscal") {
    include 'nuvemfiscal.php';
  }

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

