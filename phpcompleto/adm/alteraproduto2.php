<?php
	include("conexao.php");
	$codproduto = $_POST["codproduto"];
	$sql = "SELECT * FROM produto WHERE codproduto = $codproduto";
    $consulta = mysqli_query($conexao, $sql);
	if(mysqli_num_rows ($consulta) == ' '){
	echo "Produto não cadastrado";
	}else{
   $linha = mysqli_fetch_array($consulta);
   $codproduto = $linha["codproduto"];
   $descricao= $linha["descricao"];   
   $categoria = $linha["categoria"];
   $preco = $linha["preco"];
?>
<div class="container">
	<h1>Altera  Produto</h1>
	<form action="alteraproduto3.php" method="post">
	<label>Codigo do Produto:<br>
	<input type="text" name="codproduto"  value="<?php echo $codproduto; ?>"></label><br>
	<label>Descrição:<br><input type="text" name="descricao"  value="<?php echo $descricao; ?>">
	</label><br>
	<label>Categoria:<br>
	<input type="text" name="categoria" value="<?php echo $categoria; ?>">	</label><br>
	<label>Preço:<br>	<input type="text" name="preco" value="<?php echo $preco; ?>">
	</label><br>	<input type="submit" value="Alterar" class="btn-primary">
	<input type="reset" value="Limpar" class="btn-primary">
	</form><?php }?><a href="alteraproduto.php">Voltar e alterar outro produto</a></fieldset>
	</div></body></html>
