<html>
<head>
    <meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require 'conexao.php';
		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();
 		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$codigo    = (isset($_POST['codigo'])) ? $_POST['codigo'] : '';
		$id  = (isset($_POST['id'])) ? $_POST['nome'] : '';
		$id_filho   = (isset($_POST['id_filho'])) ? $_POST['id_filho'] : '';
		$fabricante = (isset($_POST['fabricante'])) ? $_POST['fabricante'] : '';
		$produto = (isset($_POST['produto'])) ? $_POST['produto'] : '';
		$preco  = (isset($_POST['preco'])) ? $_POST['preco'] : '';
		$foto  	= (isset($_POST['foto'])) ? $_POST['foto'] : '';
		$autorizado  = (isset($_POST['autorizado'])) ? $_POST['autorizado'] : '';
		$detalhes   = (isset($_POST['detalhes'])) ? $_POST['detalhes'] : '';
		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $id == ''){
		    $mensagem .= '<li>ID do registros desconhecido.</li>';
	    }
 	    // Se for ação diferente de excluir valida os dados obrigatórios
	   
 
 
 
		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'){
 			$nome_foto = 'padrao.jpg';
			if(isset($_FILES['foto']) && $_FILES['foto']['size'] >0 ){ 
 				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));
 			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false){
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    }
			}
 			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])){  
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")){ 
			               mkdir("img");  
			          }  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$nome_foto)){  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          }  
				 }  
		}
			$sql = 'INSERT INTO produtos (null,id, id_filho,fabricante, produto, preco, foto, autorizado, detalhe)
							   VALUES(:null,:id, :id_filho, :fabricante, :produto, :preco, :foto, :autorizado, :detalhe)';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':id', $id);
			$stm->bindValue(':id_filho', $id_filho);
			$stm->bindValue(':fabricante', $fabricante);
			$stm->bindValue(':produto', $produto);
			$stm->bindValue(':preco', $preco);
			$stm->bindValue(':foto', $foto);
			$stm->bindValue(':autorizado', $autorizado);
			$stm->bindValue(':detalhes', $detalhes);
			$retorno = $stm->execute();
			if ($retorno){
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    }else{
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			}
 
		
		?>
 
	</div>
</body>
</html>