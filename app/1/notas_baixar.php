<?php
//gabriel 04122023
$idEmpresa = $jsonEntrada["idEmpresa"];
$conexao = conectaMysql($idEmpresa);
if (isset($jsonEntrada['idProvedor'])) {

    $idProvedor = $jsonEntrada['idProvedor'];
    $visualizar = $jsonEntrada['visualizar'];

    //Busca parametros nota
    $sql_parametros = "SELECT * FROM notasparametros where idEmpresa = $idEmpresa";
    $buscar_parametros = mysqli_query($conexao, $sql_parametros);
    $parametros = mysqli_fetch_array($buscar_parametros, MYSQLI_ASSOC);

    $jsonSaida = array(
        "status" => 200,
        "retorno" => "ok"
    );

    if ($parametros['fornecedor'] === "nuvemfiscal") {
        $acao = "baixar";
        include 'nuvemfiscal.php';
    }


} else {
    $jsonSaida = array(
        "status" => 400,
        "retorno" => "Faltaram parametros"
    );
}
