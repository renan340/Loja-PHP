<html>
<head>
<title>Consultar Cliente</title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php 
    $codcliente = $_POST["codcliente"];
    if($codcliente != ""){
    include("conexao.php");
	$sql = "SELECT * FROM cliente WHERE codcliente = $codcliente";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) > 0){
        ?>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
				<th>CEP</th>
				<th>Telefone</th>
				<th>CPF</th>
				<th>E-mail</th>
				<th>Senha</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["nome"];?></td>
				<td><?php echo $row["endereco"];?></td>
				<td><?php echo $row["cep"];?></td>
				<td><?php echo $row["telefone"];?></td>	
				<td><?php echo $row["cpf"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["senha"];?></td>
            </tr>
            <?php
        } echo "</table>";
    }else{
        echo "Nenhum Cliente encontrado!";
    }    mysqli_close($conexao); 
    }
?>
<a href="consultacliente.php">Voltar e consultar outro Cliente</a>
</body>
</html>