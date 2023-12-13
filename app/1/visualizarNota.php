<?php
//gabriel 04122023
$idEmpresa = $jsonEntrada["idEmpresa"];
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['idProvedor'])) {

    $id = $jsonEntrada['idProvedor'];
    $visualizar = $jsonEntrada['visualizar'];

    //Busca parametros nota
    $sql_parametros = "SELECT * FROM notasparametros where idEmpresa = $idEmpresa";
    $buscar_parametros = mysqli_query($conexao, $sql_parametros);
    $parametros = mysqli_fetch_array($buscar_parametros, MYSQLI_ASSOC);

    //Chamar Function para emitir nota nuvemFiscal
    $config = NuvemFiscal\Configuration::getDefaultConfiguration()
        ->setApiKey('Authorization', 'Bearer')
        ->setAccessToken($parametros['access_token']);
    $apiInstance = new NuvemFiscal\Api\NfseApi(
        new GuzzleHttp\Client(),
        $config
    );

    $jsonSaida = array(
        "status" => 200,
        "retorno" => "ok"
    );

    if ($jsonEntrada['visualizar'] == "pdf") {
            $logotipo = null; 
            $mensagem_rodape = null;
            $PDF = $apiInstance->baixarPdfNfse($id, $logotipo, $mensagem_rodape);
            $pdfContent = file_get_contents($PDF->getPathname());
            $base64PdfContent = base64_encode($pdfContent);
            $jsonSaida['pdf_content'] = $base64PdfContent;
    }

    if ($jsonEntrada['visualizar'] == "xml") {
            $XML = $apiInstance->baixarXmlNfse($id);
            $xmlContent = file_get_contents($XML->getPathname());
            $base64XmlContent = base64_encode($xmlContent);
            $jsonSaida['xml_content'] = $base64XmlContent;
    }


} else {
    $jsonSaida = array(
        "status" => 400,
        "retorno" => "Faltaram parametros"
    );
}
