<?php
include_once __DIR__ . "/../conexao.php";

function buscaNotasServico($idNotaServico=null)
{
	
	$notas = array();
	
	$idEmpresa = null;
	if (isset($_SESSION['idEmpresa'])) {
    	$idEmpresa = $_SESSION['idEmpresa'];
	}
	

	$apiEntrada = array(
		'idEmpresa' => $idEmpresa,
		'idNotaServico' => $idNotaServico
		
	);
	
	$notas = chamaAPI(null, '/notas/notasservico', json_encode($apiEntrada), 'GET');

	return $notas;
}


if (isset($_GET['operacao'])) {

	$operacao = $_GET['operacao'];

	if ($operacao=="inserir") {
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idCliente' => $_POST['idCliente'],
    		'dataFaturamento' => $_POST['dataFaturamento'],
    		'dataEmissao' => $_POST['dataEmissao'],
    		'serieNota' => $_POST['serieNota'],
    		'numeroNota' => $_POST['numeroNota'],
    		'serieRPS' => $_POST['serieRPS'],
    		'numeroRPS' => $_POST['numeroRPS'],
    		'valorNota' => $_POST['valorNota'],
    		'statusNota' => $_POST['statusNota'],
    		'condicao' => $_POST['condicao'],
		);
		/* echo json_encode($apiEntrada);
		return; */
		$notas = chamaAPI(null, '/notas/notasservico', json_encode($apiEntrada), 'PUT');
	}

	//chama api de notascontrato onde grava registro na tabela de notasservico e notascontrato
	if ($operacao=="inserir_notascontrato") {
	
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idCliente' => $_POST['idCliente'],
			'idContrato' => $_POST['idContrato'],
    		'dataFaturamento' => $_POST['dataFaturamento'],
    		'dataEmissao' => $_POST['dataEmissao'],
    		'serieNota' => $_POST['serieNota'],
    		'numeroNota' => $_POST['numeroNota'],
    		'serieRPS' => $_POST['serieRPS'],
    		'numeroRPS' => $_POST['numeroRPS'],
    		'valorNota' => $_POST['valorNota'],
    		'statusNota' => $_POST['statusNota'],
    		'condicao' => $_POST['condicao'],
		);
		/* echo json_encode($apiEntrada);
		return; */
		$notas = chamaAPI(null, '/notas/notascontrato', json_encode($apiEntrada), 'PUT');
		header('Location: ../services/contratos/visualizar.php?id=notascontrato&&idContrato=' . $apiEntrada['idContrato']);
	}

	if ($operacao=="alterar") {
		
		
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idCliente' => $_POST['idCliente'],
			'idNotaServico' => $_POST['idNotaServico'],
    		'dataFaturamento' => $_POST['dataFaturamento'],
    		'dataEmissao' => $_POST['dataEmissao'],
    		'serieNota' => $_POST['serieNota'],
    		'numeroNota' => $_POST['numeroNota'],
    		'serieRPS' => $_POST['serieRPS'],
    		'numeroRPS' => $_POST['numeroRPS'],
    		'valorNota' => $_POST['valorNota'],
    		'statusNota' => $_POST['statusNota'],
    		'condicao' => $_POST['condicao'],
		);
		/* echo json_encode($apiEntrada);
		return; */
		$notas = chamaAPI(null, '/notas/notasservico', json_encode($apiEntrada), 'POST');
	}




	//busca os dados para passar ao modal de notas Servico 
	if ($operacao == "buscar") {
        $idNotaServico = $_POST['idNotaServico'];
        if ($idNotaServico == "") {
            $idNotaServico = null;
        }
        $apiEntrada = array(
            'idEmpresa' => $_SESSION['idEmpresa'],
            'idNotaServico' => $idNotaServico
        );
        $notas = chamaAPI(null, '/notas/notasservico', json_encode($apiEntrada), 'GET');

        echo json_encode($notas);
        return $notas;
    }

	//chama a api de notascontrato passando idContrato como parametro(usado na tab de contrato) 
	if ($operacao == "buscarnotascontrato") {

		$idContrato = $_POST["idContrato"];

		if ($idContrato == ""){
			$idContrato = null;
		}
	
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idContrato' => $idContrato,
			
		);
		
		$notas = chamaAPI(null, '/notas/notascontrato', json_encode($apiEntrada), 'GET');

		echo json_encode($notas);
		return $notas;

		header('Location: ../notas/index.php');
	}

	//busca com filtro da tabela principal de notas
	if ($operacao == "filtrar") {

		$buscanotas = $_POST["buscanotas"];
		$idCliente = $_POST["idCliente"];
		$statusNota = $_POST["statusNota"];

		if ($buscanotas == ""){
			$buscanotas = null;
		}

		if ($idCliente == ""){
			$idCliente = null;
		}

		if ($statusNota == ""){
			$statusNota = null;
		}
	
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idNotaServico' => null,
			'buscanotas' => $buscanotas,
			'idCliente' => $idCliente,
			'statusNota' => $statusNota,
		);
		
		$notas = chamaAPI(null, '/notas/notasservico', json_encode($apiEntrada), 'GET');

		echo json_encode($notas);
		return $notas;

		header('Location: ../notas/index.php');
	}

	

	header('Location: ../notasservico/index.php');
	
}

?>

