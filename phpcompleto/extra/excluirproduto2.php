<?php
$codproduto = $_POST["codproduto"];
include("conexao.php");
$sql = "SELECT * FROM produto WHERE codproduto = $codproduto";
 $result = mysqli_query($conexao, $sql);  
if (mysqli_num_rows($result) == 0) {
?>
<p>O Produto de número <?php echo $codproduto; ?> não foi encontrado.</p>
<?php
}
else {
   $linha = mysqli_fetch_array($result);
  
   $descricao = $linha["descricao"];   
   $categoria = $linha["categoria"];
   $preco = $linha["preco"];
   
 ?>
<table border="1" width="100%">
<tr>
  <th>Descrição</th>
  <th>Categoria</th>
  <th>Preço</th>
  
   </tr>
<tr>  
  <td><?php echo $descricao;?></td>
				<td><?php echo $categoria;?></td>
				<td><?php echo $preco;?></td>
				
   </tr>
</table>
<br /><hr color="#CCCCCC" size="1" />
<form method="POST" action="excluirproduto3.php">
Tem certeza que deseja excluir o produto acima?<br />
<input type="radio" name="resp" value="N" checked="true" />NÃO
<input type="radio" name="resp" value="S" />SIM

<input type="hidden" name="codproduto" value="<?php echo $codproduto; ?>" />
<input type="submit" value="Excluir produto" />
</form>
<?php
}
?>
<br /><hr color="#CCCCCC" size="1" />
<a href="excluiproduto.php">Consultar outro produto para excluir</a>
</fieldset>
</body>
</html>
