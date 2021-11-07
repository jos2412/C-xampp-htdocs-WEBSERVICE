<?php
	
	include '../BO/conexion.php';
	
	$pdo = new Conexion();
	
	//Listar registros y consultar registro
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET['nombre']))
		{
			$sql = $pdo->prepare("SELECT * FROM diccionario WHERE nombre=:nombre");
			$sql->bindValue(':nombre', $_GET['nombre']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			echo json_encode($sql->fetchAll());
			exit;				
			
			} else {
			
			$sql = $pdo->prepare("SELECT * FROM diccionario");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			echo json_encode($sql->fetchAll());
			exit;		
		}
	}
	
	
	//Si no corresponde a ninguna opción anterior
	header(" 400 Bad Request");
?>