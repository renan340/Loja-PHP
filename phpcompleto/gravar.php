<?php
	include('conexao.php');
	$nome = $_POST ["nome"];
	$email = $_POST ["email"];
	$mensagem = $_POST ["mensagem"];
	$sql = "insert into faleconosco values(null,'".$nome."','".$email."','".$mensagem."')";
	if(mysqli_query($conexao, $sql)){
		
	echo"<script language='javascript' type='text/javascript'>
					alert('Gravado com sucesso');
					window.location.href='faleconosco.php';</script>";
	}else{
		echo "Erro ao gravar!";
	}
	mysqli_close($conexao);

	
?>	