<?php
include("conexao.php");
$codproduto = $_POST["codproduto"];
$sql = "SELECT * FROM produto WHERE codproduto = $codproduto";
$consulta = mysqli_query($conexao, $sql);
if (mysqli_num_rows($consulta) == 0) {
?>
<p>O código do produto <?php echo $codproduto ?> não foi
 encontrado.</p>
<?php
}else {
   $linha = mysqli_fetch_array($consulta);
   $codproduto = $linha["codproduto"];
   $descricao = $linha["descricao"];
   $categoria = $linha["categoria"];
   $preco= $linha["preco"];
 ?>
<table border="1" width="100%">
<tr> 
<th>Código Produto</th>
<th>Descrição</th>
<th>Categoria</th>
  <th>Preço</th> 
  </tr>
  <tr>  
<td><?php echo $codproduto; ?></td>
<td><?php echo $descricao; ?></td>
<td><?php echo $categoria; ?></td>
<td><?php echo $preco; ?></td>
</tr></table>
<br />
<hr color="#CCCCCC" size="1" />
<form method="POST" action="excluiproduto3.php">
Tem certeza que deseja excluir o produto acima?<br />
<input type="radio" name="resp" value="N" checked="true" />NÃO
<input type="radio" name="resp" value="S" />SIM
<input type="hidden" name="codproduto" value="<?php echo $codproduto; ?>" />
<input type="submit" value="Excluir Produto" />
</form>
<?php
}
?>
<br /><hr color="#CCCCCC" size="1" />
<a href="excluiproduto.php" class="btn-success">Consultar outro produto para excluir</a>
</fieldset>

