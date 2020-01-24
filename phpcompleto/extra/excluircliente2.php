<?php
$codcliente = $_POST["codcliente"];
include("conexao.php");
$sql = "SELECT * FROM cliente WHERE codcliente = $codcliente";
 $result = mysqli_query($conexao, $sql);
    
if (mysqli_num_rows($result) == 0) {
?>

<p>O Cliente de número <?php echo $codcliente; ?> não foi encontrado.</p>

<?php
}
else {
   $linha = mysqli_fetch_array($result);
   $codcliente = $linha["codcliente"];
   $nome = $linha["nome"];   
   $endereco = $linha["endereco"];
   $cep = $linha["cep"];
   $telefone = $linha["telefone"];
   $cpf = $linha["cpf"];
   $email = $linha["email"];
   $senha = $linha["senha"];
 ?>

<table border="1" width="100%">
<tr>
  <th>Nome</th>
  <th>Endereço</th>
  <th>CEP</th>
  <th>Telefone</th>
	<th>CPF</th>
	<th>E-mail</th>
	<th>Senha</th>
  
 </tr>
<tr>  
  <td><?php echo $nome;?></td>
				<td><?php echo $endereco;?></td>
				<td><?php echo $cep;?></td>
				<td><?php echo $telefone;?></td>	
				<td><?php echo $cpf;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $senha;?></td>
  
 </tr>
</table>

<br /><hr color="#CCCCCC" size="1" />

<form method="POST" action="excluircliente3.php">

Tem certeza que deseja excluir o Cliente acima?<br />
<input type="radio" name="resp" value="N" checked="true" />NÃO
<input type="radio" name="resp" value="S" />SIM

<input type="hidden" name="codcliente" value="<?php echo $codcliente; ?>" />
<input type="submit" value="Excluir Cliente" />

</form>

<?php
}
?>

<br /><hr color="#CCCCCC" size="1" />

<a href="excluicliente.php">Consultar outro Cliente para excluir</a>

</fieldset>

</body>
</html>
