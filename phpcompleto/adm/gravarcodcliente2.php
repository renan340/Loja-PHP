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
                <th>E-mail</th>
				<th>Senha</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["nome"];?></td>
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
<a href="codcliente.php">Voltar e consultar outro Cliente</a>
</body>
</html>
