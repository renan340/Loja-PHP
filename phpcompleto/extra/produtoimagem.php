<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Produto</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
		</script>
 </head> 
  <?php
// Conexão com o banco de dados
include "conexao.php";
	if (isset($_POST['cadastrar'])) { /* verifica a informação de qualquer variável, vai conferir se a variável existe - aqui, verifica o que colocamos no POST a apalavra "cadastrar"*/
		// Recupera os dados dos campos
		$descricao = $_POST["descricao"];
		$categoria = $_POST["categoria"];
		$preco = $_POST["preco"];	
		$imagem = $_FILES["imagem"]; /* o arquivo vai ser trazido da nossa máquina para ser gravado numa pasta através da variável $_FILES, ele faz o upload de arquivos */
		// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) { /* verifica se a imagem é diferente de vazio, ou seja, se há imagem */
		// Largura máxima em pixels
		$largura = 95000;
		// Altura máxima em pixels
		$altura = 980000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000; /* isso é em byte, temos que dividir por 1024 para ver o tamanho */
		$error = array(); /* variável de erro, ela é definida como um vetor */
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){ /* preg_match verifica se o arquivo anexado é uma imgem, e aqui se define as extensões aceitas. Ao invés de se usar vírgula, usamos o pipe | para dividir as imagens. Se a extensão for diferente dessas estabelecidas, dá erro */
     	   $error[1] = "Isso não é uma imagem válida";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($imagem["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($imagem["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext); /* o que é salvo da imagem no banco de dados é o nome, logo, o que se resgata aqui é o nome da imagem. A imagem em si fica armazenada na pasta destino, que, no caso, é a pasta fotos, dentro do htdocs */
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1]; /* o nome da imagem vai ser codificado, criptografado em md5. Isso pode ser retirado */
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem; /* destino de gravação da imagem */
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
			$sql = "insert into produto values(null,'".$descricao."','".$categoria."','".$preco."','".$nome_imagem."')";
			$consulta = mysqli_query($conexao, $sql);
			// Se os dados forem inseridos com sucesso
			if ($sql){
				echo "Cadastrado com sucesso.";
			}
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
		}
	}
?>
<body> <!-- o PHP está antes do formulário, mas pode estar depois, afinal, ele só chama o PHP quando o botão "cadastrar" é pressionado -->
<div class="container">
<div class="col-md-10">
		  	<div class="row">
		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">
				  <h1>Cadastro Produto</h1>
			</div>
			
			
			
						</div>
		  	<div class="panel-body">
	<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" name="cadastro" >
		<div class="form-group">
		<label class="col-sm-2">Descrição:</label>
		<input type="text" name="descricao" class="col-sm-5" id="descricao">
		</div>
		<div class="form-group">
		<label class="col-sm-2">Categoria:</label>
		<input type="text" name="categoria" class="col-sm-5" id="categoria">
		</div>
		<div class="form-group">
		<label class="col-sm-2"> Preço:</label>
		<input type="text" name="preco" class="col-sm-5" id="preco">
		</div>
			<div class="form-group">
		<label class="col-sm-2">Imagem:</label>
		<input type="file" name="imagem" class="btn btn-primary" id="imagem">
		</div><br><br>
		<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="cadastrar" class="btn btn-primary"value="Cadastrar"/>
		</div>
	</form>
	</div>
		  		</div>		  		
		  	</div> 	
		  </div>
		</div>
    </div>
	</div>
    </section>
</body>
</html>




                                    