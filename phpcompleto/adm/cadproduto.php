<html>
<head><title>Cadastro de Produtos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="gravarproduto.php" method="POST">
	<div class="container">
	<div class="form-group">
	<h1>Cadastro de Produto</h1>
	<label>Descrição:<input type=text name="descricao"></label><br>
	<label>Categoria:<input type=text name="categoria"></label><br>
	<label>Preço:<input type="text" name="preco"></label><br>
	
	<input class="btn-danger"type="reset" value="Limpar">
	<input class="btn-success"type="submit" value="Enviar">
	</div>
	</form>
	</div>
	<a href="menu.php">Voltar tela inicial</a>
</body>
</html>