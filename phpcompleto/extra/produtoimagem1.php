<html>
<head>
<title>Cadastrar Produto com Imagem</title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1>Novo Produto</h1>
<form action="produtoimagem2.php" method="post" enctype="multipart/form-data" name="cadastro">
<div class="form-group">
Descrição:<br />
<input type="text" name="descricao" /><br /><br />
</div>
<div class="form-group">
Categoria:<br />
<input type="text" name="categoria" /><br /><br />
</div>
<div class="form-group">
Preço:<br />
<input type="text" name="preco" /><br /><br />
</div>
<div class="form-group">
Imagem do Produto:<br />

<input type="file" class="btn-primary" name="imagem" /><br /><br /></div>
<input type="submit"  name="cadastrar" value="Cadastrar" />
</form>
</div>
</body>
</html>