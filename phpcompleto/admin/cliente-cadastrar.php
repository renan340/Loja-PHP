<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: form-cliente.php");
    
   // Variáveis ligando ao formulário
$nome = $_POST['nome'];
    if($nome=="") throw new Exception("nomeInválido!");
    
$endereco = $_POST['endereco'];
    if($endereco =="") throw new Exception("endereco Inválido!");
	
$telefone= $_POST['telefone'];
    if($telefone =="") throw new Exception("telefone Inválido!");
	$cep= $_POST['cep'];
    if($cep =="") throw new Exception("cep Inválido!");
	$cpf= $_POST['cpf'];
    if($cpf =="") throw new Exception("cpf Inválido!");
    
$email = $_POST['email'];
    if($email=="") throw new Exception("email Inválido");
	

	
$senha = $_POST['senha'];
    if($senha=="") throw new Exception("Senha Inválida");
	
	
	
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Cliente.class.php";

    $cliente = new Cliente(); 
	$cliente->nome = $nome;
	$cliente->endereco = $endereco;
	$cliente->telefone = $telefone;
	$cliente->cep = $cep;
	$cliente->cpf = $cpf;

	$cliente->email = $email;
   
       
    $cliente->senha = $senha;
    $cliente->inserir();    	
	
    
   
    $msg = "Cadastrado com sucesso";

}catch(PDOException $e){
    $msg = "Contate o administrador";   
    echo $e->getMessage();
}catch(Exception $e){
    $msg = $e->getMessage();
}

?>
    
    


<?php $title ="Cadastro"; ?>

<section class="container">
    
    <?php echo $msg; ?>
    
</section>


    
	
	
	