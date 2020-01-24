<?php  
    include('conexao.php');
	$codcliente = $_POST["codcliente"];
	
	
	$sql = "insert into produto  values(null,'".$codcliente."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "Gravado com sucesso!";
	}else{
		echo "Erro ao gravar!";
	}
	mysqli_close($conexao);
?>
<br>
<a href="menu.php">Página Inicial</a>