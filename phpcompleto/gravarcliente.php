

<?php  
    include('conexao.php');
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$telefone = $_POST["telefone"];
	$cep = $_POST["cep"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$sql = "insert into cliente values(null,'".$nome."','".$endereco."','".$telefone."','".$cep."','".$cpf."','".$email."','".$senha."')";
	
	if(mysqli_query($conexao, $sql)) {
		echo "<script>
			alert('Gravado com sucesso!');
	        location.href='index.php';
	      </script>";
	}else{
			echo "<script>
	        alert('Cliente não cadastrado');
	      </script>";
	}
	mysqli_close($conexao);
?>
<br>

