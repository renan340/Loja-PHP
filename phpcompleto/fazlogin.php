<?php
session_start();

include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select * from cliente where email='$email' and senha='$senha'";

$resultado = mysqli_query($conexao, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	$_SESSION['cliente']       = $dados['codcliente'];
	$_SESSION['clientenome']  = $dados['nome'];
	$_SESSION['clienteendereco'] = $dados['endereco'];
    $_SESSION['clientecep'] = $dados['cep'];
    $_SESSION['clientetelefone'] = $dados['telefone'];
    $_SESSION['clientecpf'] = $dados['cpf'];
	$_SESSION['clienteemail'] = $dados['email'];
	$_SESSION['clientesenha'] = $dados['senha'];
	        header("location: admc/index.php");
	     
} else {
	echo "<script>
	        alert('Cliente não encontrado');
	        location.href='login.php';
	      </script>";
}

?>



