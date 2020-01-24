<html><head><title>Alterar Cliente</title></head>
<body>
<fieldset><legend>Cliente Alterado</legend>
<?php
	$codcliente = $_POST["codcliente"];
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
?>
<P>O seguinte Cliente foi alterado com sucesso:</P>
Nome: <?php echo $nome; ?><br/>
E-mail: <?php echo $email; ?><br/>
Senha: <?php echo $senha; ?> <br/>
<?php
include("conexao.php");
$sql = "UPDATE cliente SET  nome = '$nome', email = '$email', senha = '$senha'  
WHERE codcliente = '$codcliente'";
mysqli_query($conexao, $sql);
?>
<a href="alteracliente.php">Voltar e alterar outro Cliente</a>
</fieldset>
</body>
</html>
