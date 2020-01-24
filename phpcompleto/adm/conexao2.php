<?php
$servidor = 'localhost';
$usuario  = 'root';
$senha 	  = '';
$banco 	  = 'aulaphp';
	try{
	  $conexao = new PDO('mysql:host='.$servidor.';dbname=aulaphp', $usuario, $senha);  
	  
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>