<?php
//Verifica dados da nota
$sql_consulta = "SELECT * FROM notasservico WHERE idNotaServico = $idNotaServico";
$buscar_consulta = mysqli_query($conexao, $sql_consulta);
$row_consulta = mysqli_fetch_array($buscar_consulta, MYSQLI_ASSOC);

$idPessoaPrestador = $row_consulta['idPessoaPrestador'];
$idPessoaTomador = $row_consulta['idPessoaTomador'];
$dataCompetencia = $row_consulta['dataCompetencia'];
$valorNota = $row_consulta['valorNota'];
$condicao = $row_consulta['condicao'];
$descricaoServico = $row_consulta['descricaoServico'];
$codMunicipio = $row_consulta['codMunicipio'];


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

$vPis = floatval(number_format($valorNota * ($parametros['pAliqPis'] / 100), 2, '.', ''));
$vCofins = floatval(number_format($valorNota * ($parametros['pAliqCofins'] / 100), 2, '.', ''));
$piscofins = array(
    'CST' => $parametros['CST'],
    'vBCPisCofins' => floatval($valorNota),
    'pAliqPis' => floatval($parametros['pAliqPis']),
    'pAliqCofins' => floatval($parametros['pAliqCofins']),
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
    'vServ' => floatval($valorNota)
);

$valores = array(
    'vServPrest' => $vServPrest,
    'trib' => $trib
);

$infDPS = array(
    'tpAmb' => intval($parametros['tpAmb']),
    'dhEmi' => $dataEmissao,
    'verAplic' => $parametros['verAplic'],
    'dCompet' => $dataCompetencia,
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
    ->setHost('https://api.sandbox.nuvemfiscal.com.br')
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

sleep(2);
$dadosNFSE = $apiInstance->consultarNfse($nfse['id']);

//LOG
if (isset($LOG_NIVEL)) {
  if ($LOG_NIVEL >= 3) {
    fwrite($arquivo, $identificacao . "-dadosNFSE->" . $dadosNFSE . "\n");
  }
}
//LOG

$retornoNFSE = null;
if ($dadosNFSE['status'] === "processando") {
    $statusNota = 1; //Processando
}
if ($dadosNFSE['status'] === "autorizada") {
    $statusNota = 2; //Autorizada/Emitida
    $dataEmissao = $dadosNFSE['data_emissao']->format('Y-m-d H:i:s');
    $serie = $dadosNFSE->getDPS()->getSerie();
    $nDPS = $dadosNFSE->getDPS()->getNDPS();
}
if ($dadosNFSE['status'] === "negada") {
    $statusNota = 3; //Negada
    $retornoNFSE = $dadosNFSE['mensagens'][0]['descricao'];
}

$sql = "UPDATE `notasservico` SET `statusNota`='$statusNota', `idProvedor`='" . $dadosNFSE['id'] . "', `provedor`='" . $parametros['fornecedor'] . "' ";

if ($dadosNFSE['status'] === "autorizada") {
  $sql = $sql . " , `dataEmissao`='$dataEmissao', `url`='" . $dadosNFSE['link_url'] . "', `CodVerifica`='" . $dadosNFSE['codigo_verificacao'] . "',
  `serieDPS`='$serie', `numeroDPS`='$nDPS', `serieNota`='$serie', `numeroNota`='" . $dadosNFSE['numero'] . "' ";
}

$sql = $sql . " WHERE idNotaServico = $idNotaServico";

//LOG
if (isset($LOG_NIVEL)) {
    if ($LOG_NIVEL >= 3) {
        fwrite($arquivo, $identificacao . "-SQL->" . $sql . "\n");
    }
}
//LOG

