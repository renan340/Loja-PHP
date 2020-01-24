<html>
<head><title><Cadastro de Cliente</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="gravarcliente.php" method="POST" id="fcadastro">
	<div class="container">
	<div class="form-group">
	<h1>Cadastro de Cliente</h1>
	Nome:<input type=text name="nome"><br>
	E-mail:<input type=text name="email"><br>
	Senha:<input type="password" name="senha"><br>
	
	<input class="btn-danger"type="reset" value="Limpar">
	<input class="btn-success"type="submit" value="Enviar">
	</div>
	</form>
	<a href="menu.php">Voltar tela inicial</a>
</body>
</html>