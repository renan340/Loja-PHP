<html>
<head>
<title>Alterar Produto</title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
<fieldset><legend>Alterar Produto</legend>
<?php
include("conexao.php");
$codproduto = $_POST["codproduto"];
$sql = "SELECT * FROM produto WHERE codproduto = $codproduto";
$consulta = mysqli_query($conexao, $sql);
  if(mysqli_num_rows ($consulta) == ' ')
   echo "Produto não cadastrado";
else
{
   $linha = mysqli_fetch_array($consulta);

   $descricao = $linha["descricao"];   
   $categoria = $linha["categoria"];
   $preco = $linha["preco"];
  ?>
<div class="container">
	<h1>Altera  Produto</h1>
	<form action="alteraproduto3.php" method="post">
	<label>Codigo do Produto:<br>
	<input type="text" name="codproduto"  value="<?php echo $codproduto; ?>">
	</label><br>
	<label>Descrição:<br>
	<input type="text" name="descricao"  value="<?php echo $descricao; ?>">
	</label><br>
	<label>	Categoria:<br>
	<input type="text" name="categoria"  value="<?php echo $categoria; ?>">
	</label><br>
	<label>Preço:<br>
	<input type="text" name="preco"  value="<?php echo $preco; ?>">
	</label><br>
	
	
	<input type="submit" value="Alterar" class="btn-primary">
				<input type="reset" value="Limpar" class="btn-prim">
			</form>
<?php
}?><hr size="1" color="#CCCCCC" />
<a href="alteraproduto.php">Voltar e alterar outro produto</a>
</fieldset></body></html>