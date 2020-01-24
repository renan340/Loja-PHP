<?php
// Conexão com o banco de dados
include("conexao.php");
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] == 'POST')
// Se o usuário clicou no botão cadastrar efetua as ações

	// Recupera os dados dos campos
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria'];
	$preco = $_POST['preco'];
	$imagem = $_FILES["imagem"];
	// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) {
		// Largura máxima em pixels
		$largura = 150000;
		// Altura máxima em pixels
		$altura = 180000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
    	// Verifica se o arquivo é uma imagem
    	if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $imagem["type"])){
     	   $error[1] = "Isso não é uma imagem.";
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
		if($arquivo["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "img/" . $nome_imagem;
		// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
			
			$sql = mysqli_query("INSERT INTO produto VALUES ('', '".$descricao."', '".$categoria."', '".$preco."','".$nome_imagem."')");
			 $result = mysqli_query($conexao, $sql);// Se os dados forem inseridos com sucesso
			if ($result){
				 $msg = "Não Cadastrado";
			}
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
				 $msg = "Cadastrado com sucesso";
		$sql = mysqli_query("INSERT INTO produto VALUES ('null', '".$descricao."', '".$categoria."', '".$preco."','".$nome_imagem."')");
		$result = mysqli_query($conexao, $sql);// Se os dados forem inseridos com sucesso		
			}
		}
	}
	}catch(Exception $e){
    $msg = $e->getMessage();
}
	

?>