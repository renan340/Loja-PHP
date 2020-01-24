<html>
<head>
<title>Alterar Cliente</title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
<fieldset><legend>AlterarCliente</legend>
<?php
include("conexao.php");
$codcliente = $_POST["codcliente"];

	$sql = "SELECT * FROM cliente WHERE codcliente = $codcliente";
    $consulta = mysqli_query($conexao, $sql);
  if(mysqli_num_rows ($consulta) == ' ')
   echo "Cliente não cadastrado";
else
{
   $linha = mysqli_fetch_array($consulta);
   $codcliente = $linha["codcliente"];
   $nome = $linha["nome"];   
   $endereco = $linha["endereco"];
   $cep = $linha["cep"];
   $telefone = $linha["telefone"];
   $cpf = $linha["cpf"];
   $email = $linha["email"];
   $senha = $linha["senha"];
?>
<div class="container">
	<h1>Altera  Cliente</h1>
	<form action="alteracliente3.php" method="post">
	<label>Codigo do Cliente:<br>
	<input type="text" name="codcliente"  value="<?php echo $codcliente; ?>">
	</label><br>
	<label>Nome:<br>
	<input type="text" name="nome"  value="<?php echo $nome; ?>">
	</label><br>
	<label>	Endereço:<br>
	<input type="text" name="endereco"  value="<?php echo $endereco; ?>">
	</label><br>
	<label>Telefone:<br>
	<input type="text" name="telefone"  value="<?php echo $telefone; ?>">
	</label><br>
	<label>CEP:<br>
	<input type="text" name="cep"  value="<?php echo $cep; ?>">
	</label><br>
	<label>CPF:<br>
	<input type="text" name="cpf" value="<?php echo $cpf; ?>">
	</label><br>
	</label><br>
	<label>E-mail:<br>
	<input type="text" name="email" value="<?php echo $email; ?>">
	</label><br>
	<label>Senha:<br>
	<input type="text" name="senha" value="<?php echo $senha; ?>">
	</label>
	<br>
	<input type="submit" value="Alterar" class="btn-primary">
				<input type="reset" value="Limpar" class="btn-prim">
			</form>
<?php
}?><hr size="1" color="#CCCCCC" />
<a href="alteracliente.php">Voltar e alterar outro cliente</a>
</fieldset></body></html>
