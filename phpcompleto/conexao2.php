<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "comercio";
	//Criar a conexao
	
	try{

	   $conexao = new PDO('mysql:host='.$servidor.';dbname=comercio', $usuario, $senha);
	  
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
?>