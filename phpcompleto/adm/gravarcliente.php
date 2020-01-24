<?php  
    include('conexao.php');
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$sql = "insert into cliente values(null,'".$nome."','".$email."','".$senha."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "Gravado com sucesso!";
	}else{
		echo "Erro ao gravar!";
	}
	mysqli_close($conexao);
?>
<br>
<a href="xxx.php">Página Inicial</a>