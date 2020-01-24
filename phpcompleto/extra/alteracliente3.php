<html><head><title>Alterar Cliente</title></head>
<body>
<fieldset><legend>Cliente Alterado</legend>
<?php

	$codcliente = $_POST["codcliente"];
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$telefone = $_POST["telefone"];
	$cep = $_POST["cep"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
?>
<P>O seguinte Cliente foi alterado com sucesso:</P>

Nome: <?php echo $nome; ?><br/>
Endereço: <?php echo $endereco; ?> <br/>
Telefone: <?php echo $telefone; ?><br/>
CEP: <?php echo $cep; ?><br/>
CPF: <?php echo $cpf; ?><br/>
E-mail: <?php echo $email; ?><br/>
Senha: <?php echo $senha; ?> <br/>

<?php
include("conexao.php");

$sql = "UPDATE cliente SET  nome = '$nome', endereco = '$endereco', cep = '$cep', telefone = '$telefone', cpf = '$cpf', email = '$email', senha = '$senha'  WHERE codcliente = '$codcliente'";
mysqli_query($conexao, $sql);
?>
<hr size="1" color="#CCCCCC" />
<a href="alteracliente.php">Voltar e alterar outro Cliente</a>
</fieldset>
</body>
</html>
