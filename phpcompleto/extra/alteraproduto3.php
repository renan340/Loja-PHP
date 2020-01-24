<html><head><title>Alterar Produto</title></head>
<body>
<fieldset><legend>Produto Alterado</legend>
<?php
	$codproduto = $_POST["codproduto"];
	$descricao = $_POST["descricao"];
	$categoria = $_POST["categoria"];
	$preco = $_POST["preco"];
?>
<P>O seguinte Produto foi alterado com sucesso:</P>
Código produto: <?php echo $codproduto; ?><br/>
Descrição: <?php echo $descricao; ?> <br/>
Categoria: <?php echo $categoria; ?><br/>
Preço: <?php echo $preco; ?><br/>
<?php
include("conexao.php");
$sql = "UPDATE produto SET  descricao = '$descricao', categoria = '$categoria', preco = '$preco'  WHERE codproduto = '$codproduto'";

mysqli_query($conexao, $sql);
?>
<hr size="1" color="#CCCCCC" />
<a href="alteraproduto.php">Voltar e alterar outro Produto</a>
</fieldset>
</body>
</html>