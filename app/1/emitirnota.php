<?php
//gabriel 04122023

//LOG
$LOG_CAMINHO = defineCaminhoLog();
if (isset($LOG_CAMINHO)) {
  $LOG_NIVEL = defineNivelLog();
  $identificacao = date("dmYHis") . "-PID" . getmypid() . "-" . "emitirnota";
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
  $statusNota = 1; //aberto


  //Verifica dados da nota
  $sql_consulta = "SELECT * FROM notasservico WHERE idNotaServico = $idNotaServico";
  $buscar_consulta = mysqli_query($conexao, $sql_consulta);
  $row_consulta = mysqli_fetch_array($buscar_consulta, MYSQLI_ASSOC);

  $idPessoaPrestador = $row_consulta['idPessoaPrestador'];
  $idPessoaTomador = $row_consulta['idPessoaTomador'];
  $dataFaturamento = $row_consulta['dataFaturamento'];
  $valorNota = $row_consulta['valorNota'];
  $condicao = $row_consulta['condicao'];
  $descricaoServico = $row_consulta['descricaoServico'];
  $codMunicipio = $row_consulta['codMunicipio'];
  $dataEmissao = $row_consulta['dataEmissao'];

  //Busca parametros nota
  $sql_parametros = "SELECT * FROM notasparametros where idEmpresa = $idEmpresa";
  $buscar_parametros = mysqli_query($conexao, $sql_parametros);
  $parametros = mysqli_fetch_array($buscar_parametros, MYSQLI_ASSOC);

  //Busca pessoa
  $sql_consulta1 = "SELECT * FROM pessoas WHERE idPessoa = $idPessoaPrestador";
  $buscar_consulta1 = mysqli_query($conexao, $sql_consulta1);
  $prestador = mysqli_fetch_array($buscar_consulta1, MYSQLI_ASSOC);

  $sql_consulta2 = "SELECT * FROM pessoas WHERE idPessoa = $idPessoaTomador";
  $buscar_consulta2 = mysqli_query($conexao, $sql_consulta2);
  $tomador = mysqli_fetch_array($buscar_consulta2, MYSQLI_ASSOC);



  //montagem json começo *******************
  $endNac = array(
    'cMun' => $codMunicipio,
    'CEP' => $tomador['cep']
  );

  $end = array(
    'endNac' => $endNac,
    'xLgr' => $tomador['endereco'],
    'nro' => $tomador['endNumero'],
    'xBairro' => $tomador['bairro']
  );

  $prest = array(
    'CNPJ' => $prestador['cpfCnpj']
  );

  $toma = array(
    'CNPJ' => $tomador['cpfCnpj'],
    'xNome' => $tomador['nomePessoa'],
    'end' => $end
  );

  $locPrest = array(
    'cLocPrestacao' => $codMunicipio
  );

  $cServ = array(
    'cTribNac' => $parametros['cTribNac'],
    'xDescServ' => $descricaoServico,
    'cNBS' => $parametros['cNBS']
  );

  $serv = array(
    'locPrest' => $locPrest,
    'cServ' => $cServ
  );

  $tribMun = array(
    'tribISSQN' => intval($parametros['tribISSQN']),
    'tpRetISSQN' => intval($parametros['tpRetISSQN'])
  );

  $vPis = intval($valorNota * ($parametros['pAliqPis'] / 100));
  $vCofins = intval($valorNota * ($parametros['pAliqCofins'] / 100));
  $piscofins = array(
    'CST' => $parametros['CST'],
    'vBCPisCofins' => intval($valorNota),
    'pAliqPis' => floatval($parametros['pAliqPis']),
    'pAliqCofins' => intval($parametros['pAliqCofins']),
    'vPis' => $vPis,
    'vCofins' => $vCofins,
    'tpRetPisCofins' => intval($parametros['tpRetPisCofins'])
  );

  $tribFed = array(
    'piscofins' => $piscofins
  );

  $vTotTrib = array(
    'vTotTribFed' => floatval($parametros['vTotTribFed']),
    'vTotTribEst' => intval($parametros['vTotTribEst']),
    'vTotTribMun' => intval($parametros['vTotTribMun'])
  );

  $totTrib = array(
    'vTotTrib' => $vTotTrib
  );

  $trib = array(
    'tribMun' => $tribMun,
    'tribFed' => $tribFed,
    'totTrib' => $totTrib
  );

  $vServPrest = array(
    'vServ' => intval($valorNota)
  );

  $valores = array(
    'vServPrest' => $vServPrest,
    'trib' => $trib
  );

  $infDPS = array(
    'tpAmb' => intval($parametros['tpAmb']),
    'dhEmi' => $dataEmissao,
    'verAplic' => $parametros['verAplic'],
    'dCompet' => $dataFaturamento,
    'prest' => $prest,
    'toma' => $toma,
    'serv' => $serv,
    'valores' => $valores
  );

  $jsonEmissao = array(
    'provedor' => $parametros['provedor'],
    'ambiente' => $parametros['ambiente'],
    'infDPS' => $infDPS
  );
  //montagem json fim *******************

  //LOG
    if (isset($LOG_NIVEL)) {
      if ($LOG_NIVEL >= 3) {
        fwrite($arquivo, $identificacao . "-jsonEmissao->" . json_encode($jsonEmissao) . "\n");
      }
    }
  //LOG  

  //Chamar Function para emitir nota nuvemFiscal
  $config = NuvemFiscal\Configuration::getDefaultConfiguration()
    ->setApiKey('Authorization', 'Bearer')
    ->setAccessToken($parametros['access_token']);
  $apiInstance = new NuvemFiscal\Api\NfseApi(
    new GuzzleHttp\Client(),
    $config
  );
  $body = $jsonEmissao;
  $nfse = $apiInstance->emitirNfseDps($body);

  //LOG
  if (isset($LOG_NIVEL)) {
    if ($LOG_NIVEL >= 3) {
      fwrite($arquivo, $identificacao . "-NFSE->" . $nfse . "\n");
    }
  }
  //LOG

  sleep(5);
  $dadosNFSE = $apiInstance->consultarNfse($nfse['id']);

  //LOG
  if (isset($LOG_NIVEL)) {
    if ($LOG_NIVEL >= 3) {
      fwrite($arquivo, $identificacao . "-dadosNFSE->" . $dadosNFSE . "\n");
    }
  }
  //LOG

  if ($nfse['status'] == "autorizada") {

    $sql = "UPDATE `notasservico` SET `statusNota`='$statusNota', `dataEmissao`='$dataEmissao', `idProvedor`='" . $dadosNFSE['id'] . "', `provedor`='" . $parametros['fornecedor'] . "'  WHERE idNotaServico = $idNotaServico";


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
      "retorno" => $dadosNFSE['mensagens'][0]['descricao']
    );
  }

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

