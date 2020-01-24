<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Produto</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script>
			//Ao carregar a pagina
			$(document).ready(function(){
				$("#fcadastro").validate(); //aplicando a validação ao form #fcadastro
			});
		</script>
		<style>
			Label.error{
					color: red;
					font-size: 12px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Cadastro de Produto</h1>
			<form action="gravarproduto.php" method="post" id="fcadastro">
				<label>Descrição:<br>
					<input type="text" name="descricao" class="required" id="descricao">
				</label><br>
				<label>	Categoria:<br>
					<input type="text" name="categoria" class="required" id="categoria">
				</label><br>
				<label>Preço:<br>
					<input type="text" name="preco" class="required" id="preco">
				</label><br>
				
				<input type="submit" value="Cadastrar" class="btn-primary">
				<input type="reset" value="Limpar" class="btn-prim">
			</form>
			<a href="menu.php">Voltar tela inicial</a>
		</div>
	</body>
</html>