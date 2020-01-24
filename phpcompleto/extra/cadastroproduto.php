<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Produto</title>
	
</head>
<body>
	<div class='container'>
		<fieldset>
			<legend><h1>Formulário - Cadastro de Produto</h1></legend>
			
			<form action="cadastrarproduto2.php" method="post" id='form-contato' enctype='multipart/form-data'>
				
				  <div class="form-group">
			      <label for="id">Id</label>
			      <input type="text" class="form-control" id="id" name="id" placeholder="Infome o Id">
			      <span class='msg-erro msg-id'></span>
			    </div>
 
				  
			    <div class="form-group">
			      <label for="fabricante">Fabricante</label>
			      <input type="text" class="form-control" id="fabricante" name="fabricante" placeholder="Infome o Fabricante">
			      <span class='msg-erro msg-fabricante'></span>
			    </div>
 
			    <div class="form-group">
			      <label for="Produto">Produto</label>
			      <input type="produto" class="form-control" id="produto" name="produto" placeholder="Informe o Produto">
			      <span class='msg-erro msg-produto'></span>
			    </div>
 
			    <div class="form-group">
			      <label for="preco">Preço</label>
			      <input type="preco" class="form-control" id="preco" maxlength="14" name="preco" placeholder="Informe o Preco">
			      <span class='msg-erro msg-preco'></span>
			    </div>
				
				<div class="row">
					<label for="foto">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="img/padrao.jpg" height="190" width="150" id="foto-produto">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>
				
			    
			    <div class="form-group">
			      <label for="detalhe">Detalhe</label>
			      <input type="detalhe" class="detalhe" id="detalhe" maxlength="12" name="detalhe" placeholder="detalhe">
			      <span class='msg-erro msg-detalhe'></span>
			    </div>
			    
			    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id='botao'> 
			      Gravar
			    </button>
			</form>
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>