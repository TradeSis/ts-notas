<?php
// gabriel 181223 

include_once __DIR__ . "/../conexao.php";

function buscarParametros($idEmpresa=null)
{

	$parametros = array();

	$apiEntrada = array(
		'idEmpresa' => $idEmpresa
	);
	$parametros = chamaAPI(null, '/notas/notasparametros', json_encode($apiEntrada), 'GET');
	return $parametros;
}

if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

	if ($operacao=="inserir") {


		$apiEntrada = array(
			'idEmpresa' => $_POST['idEmpresa'],
			'fornecedor' => $_POST['fornecedor'],
			'access_token' => $_POST['access_token'],
			'provedor' => $_POST['provedor'],
			'ambiente' => $_POST['ambiente'],
			'tpAmb' => $_POST['tpAmb'],
			'verAplic' => $_POST['verAplic'],
			'cTribNac' => $_POST['cTribNac'],
			'cNBS' => $_POST['cNBS'],
			'tribISSQN' => $_POST['tribISSQN'],
			'tpRetISSQN' => $_POST['tpRetISSQN'],
			'CST' => $_POST['CST'],
			'pAliqPis' => $_POST['pAliqPis'],
			'pAliqCofins' => $_POST['pAliqCofins'],
			'tpRetPisCofins' => $_POST['tpRetPisCofins'],
			'vTotTribFed' => $_POST['vTotTribFed'],
			'vTotTribEst' => $_POST['vTotTribEst'],
			'vTotTribMun' => $_POST['vTotTribMun']
		);
		$parametros = chamaAPI(null, '/notas/notasparametros', json_encode($apiEntrada), 'PUT');
		echo json_encode($apiEntrada);
		return $parametros;

	}

	if ($operacao=="alterar") {

		$apiEntrada = array(
			'idParametros' => $_POST['idParametros'],
			'idEmpresa' => $_POST['idEmpresa'],
			'fornecedor' => $_POST['fornecedor'],
			'access_token' => $_POST['access_token'],
			'provedor' => $_POST['provedor'],
			'ambiente' => $_POST['ambiente'],
			'tpAmb' => $_POST['tpAmb'],
			'verAplic' => $_POST['verAplic'],
			'cTribNac' => $_POST['cTribNac'],
			'cNBS' => $_POST['cNBS'],
			'tribISSQN' => $_POST['tribISSQN'],
			'tpRetISSQN' => $_POST['tpRetISSQN'],
			'CST' => $_POST['CST'],
			'pAliqPis' => $_POST['pAliqPis'],
			'pAliqCofins' => $_POST['pAliqCofins'],
			'tpRetPisCofins' => $_POST['tpRetPisCofins'],
			'vTotTribFed' => $_POST['vTotTribFed'],
			'vTotTribEst' => $_POST['vTotTribEst'],
			'vTotTribMun' => $_POST['vTotTribMun']
		);
		$parametros = chamaAPI(null, '/notas/notasparametros', json_encode($apiEntrada), 'POST');
		return $parametros;

	}
	
	if ($operacao == "buscar") {
		$apiEntrada = array(
			'idParametros' => $_POST['idParametros']
		);
		$parametros = chamaAPI(null, '/notas/notasparametros', json_encode($apiEntrada), 'GET');

		echo json_encode($parametros);
		return $parametros;
	}


}

?>

