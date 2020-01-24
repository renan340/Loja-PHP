<?php
	include("conexao.php");
	$codcliente = $_POST["codcliente"];
	$sql = "SELECT * FROM cliente WHERE codcliente = $codcliente";
    $consulta = mysqli_query($conexao, $sql);
	if(mysqli_num_rows ($consulta) == ' '){
	echo "Cliente não cadastrado";
	}else{
   $linha = mysqli_fetch_array($consulta);
   $codcliente = $linha["codcliente"];
   $nome = $linha["nome"];   
   $email = $linha["email"];
   $senha = $linha["senha"];
?>
<div class="container">
	<h1>Altera  Cliente</h1>
	<form action="alteracliente3.php" method="post">
	<label>Codigo do Cliente:<br>
	<input type="text" name="codcliente"  value="<?php echo $codcliente; ?>"></label><br>
	<label>Nome:<br><input type="text" name="nome"  value="<?php echo $nome; ?>">
	</label><br>
	<label>E-mail:<br>
	<input type="text" name="email" value="<?php echo $email; ?>">	</label><br>
	<label>Senha:<br>	<input type="text" name="senha" value="<?php echo $senha; ?>">
	</label><br>	<input type="submit" value="Alterar" class="btn-primary">
	<input type="reset" value="Limpar" class="btn-primary">
	</form><?php }?><a href="alteracliente.php">Voltar e alterar outro cliente</a></fieldset>
	</div></body></html>
