<html>
<head>
<title>Consultar Produto</title>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php 
    $codproduto= $_POST["codproduto"];
    if($codproduto != ""){
    include("conexao.php");
	$sql = "SELECT * FROM produto WHERE codproduto = $codproduto";
    $result = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($result) > 0){
        ?>
        <table class="table">
            <tr>
                <th>Descrição</th>
                <th>Categoria</th>
				<th>Preço</th>
				
            </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["descricao"];?></td>
				<td><?php echo $row["categoria"];?></td>
				<td><?php echo $row["preco"];?></td>
				
            </tr>
            <?php
        } echo "</table>";
    }else{
        echo "Nenhum Produto encontrado!";
    }    mysqli_close($conexao); 
    }
?>
<a href="consultaproduto.php">Voltar e consultar outro Produto</a>
</body>
</html>