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
		$condicao = strip_tags($_POST['condicao']);
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idPessoaPrestador' => $_POST['idPessoaPrestador'],
			'idPessoaTomador' => $_POST['idPessoaTomador'],
			'dataFaturamento' => $_POST['dataFaturamento'],
			'dataEmissao' => $_POST['dataEmissao'],
    		'numeroRPS' => $_POST['numeroRPS'],
    		'serieRPS' => $_POST['serieRPS'],
    		'tipoRPS' => $_POST['tipoRPS'],
    		'valorNota' => $_POST['valorNota'],
    		'descricaoServico' => $_POST['descricaoServico'],
    		'codMunicipio' => $_POST['codMunicipio'],
    		'condicao' => $condicao
		);
		/* echo json_encode($apiEntrada);
		return; */
		$notas = chamaAPI(null, '/notas/notasservico', json_encode($apiEntrada), 'PUT');
	}

	//chama api de notascontrato onde grava registro na tabela de notasservico e notascontrato
	if ($operacao=="inserir_notascontrato") {
	
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idPessoaPrestador' => $_POST['idPessoaPrestador'],
			'idContrato' => $_POST['idContrato'],
    		'numeroNota' => $_POST['numeroNota'],
    		'numeroRPS' => $_POST['numeroRPS'],
    		'serieRPS' => $_POST['serieRPS'],
    		'tipoRPS' => $_POST['tipoRPS'],
    		'serieNota' => $_POST['serieNota'],
    		'valorNota' => $_POST['valorNota'],
    		'condicao' => $_POST['condicao']
		);
		/* echo json_encode($apiEntrada);
		return; */
		$notas = chamaAPI(null, '/notas/notascontrato', json_encode($apiEntrada), 'PUT');
		header('Location: ../services/contratos/visualizar.php?id=notascontrato&&idContrato=' . $apiEntrada['idContrato']);
	}

	if ($operacao=="alterar") {
		$condicao = strip_tags($_POST['condicao']);
		
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idNotaServico' => $_POST['idNotaServico'],
			'idPessoaPrestador' => $_POST['idPessoaPrestador'],
			'idPessoaTomador' => $_POST['idPessoaTomador'],
			'dataFaturamento' => $_POST['dataFaturamento'],
			'dataEmissao' => $_POST['dataEmissao'],
    		'numeroRPS' => $_POST['numeroRPS'],
    		'serieRPS' => $_POST['serieRPS'],
    		'tipoRPS' => $_POST['tipoRPS'],
    		'valorNota' => $_POST['valorNota'],
    		'descricaoServico' => $_POST['descricaoServico'],
    		'codMunicipio' => $_POST['codMunicipio'],
    		'condicao' => $condicao
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

	}

	//busca com filtro da tabela principal de notas
	if ($operacao == "filtrar") {

		$buscanotas = $_POST["buscanotas"];
		$idPessoaPrestador = $_POST["idPessoaPrestador"];
		$statusNota = $_POST["statusNota"];

		if ($buscanotas == ""){
			$buscanotas = null;
		}

		if ($idPessoaPrestador == ""){
			$idPessoaPrestador = null;
		}

		if ($statusNota == ""){
			$statusNota = null;
		}
	
		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idNotaServico' => null,
			'buscanotas' => $buscanotas,
			'idPessoaPrestador' => $idPessoaPrestador,
			'statusNota' => $statusNota,
		);
		
		$notas = chamaAPI(null, '/notas/notasservico', json_encode($apiEntrada), 'GET');

		echo json_encode($notas);
		return $notas;

	}

	if ($operacao == "emitir") {

		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idNotaServico' => $_POST['idNotaServico']
		);
		
		$notas = chamaAPI(null, '/notas/emitirNota', json_encode($apiEntrada), 'POST');

		echo json_encode($apiEntrada);
		return $notas;
	}
	if ($operacao == "visualizarNota") {

		$apiEntrada = array(
			'idEmpresa' => $_SESSION['idEmpresa'],
			'idProvedor' => $_POST['idProvedor'],
			'visualizar' => $_POST['visualizar']
		);
		
		$notas = chamaAPI(null, '/notas/visualizarNota', json_encode($apiEntrada), 'POST');

		echo json_encode($notas);
		return $notas;
	}

	

	header('Location: ../notasservico/index.php');
	
}

?>

