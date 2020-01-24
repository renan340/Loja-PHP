<html><head><title>Alterar Cliente</title></head>
<body>
<fieldset><legend>Produto Alterado</legend>
<?php
	$codproduto = $_POST["codproduto"];
	$descricao= $_POST["descricao"];
	$categoria = $_POST["categoria"];
	$preco = $_POST["preco"];
?>
<P>O seguinte Produto foi alterado com sucesso:</P>
Descrição: <?php echo $descricao; ?><br/>
Categoria: <?php echo $categoria; ?><br/>
Preço: <?php echo $preco; ?> <br/>
<?php
include("conexao.php");
$sql = "UPDATE produto SET  descricao = '$descricao', categoria = '$categoria', preco = '$preco'  
WHERE codproduto = '$codproduto";
mysqli_query($conexao, $sql);
?>
<a href="alteraproduto.php">Voltar e alterar outro Produto</a>
</fieldset>
</body>
</html>
