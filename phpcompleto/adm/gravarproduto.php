<?php  
    include('conexao.php');
	$descricao = $_POST["descricao"];
	$categoria = $_POST["categoria"];
	$preco = $_POST["preco"];
	
	$sql = "insert into produto  values(null,'".$descricao."','".$categoria."','".$preco."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "Gravado com sucesso!";
	}else{
		echo "Erro ao gravar!";
	}
	mysqli_close($conexao);
?>
<br>
<a href="menu.php">Página Inicial</a>