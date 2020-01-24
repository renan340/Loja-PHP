<?php
$codproduto= $_POST["codproduto"];
$r = $_POST["resp"];
if ($r == "N")
   header("Location: excluiproduto.php");
else if($r == "S"){
   include("conexao.php");
   $sql = "DELETE FROM produto WHERE codproduto = $codproduto";
	mysqli_query($conexao, $sql);
}
?>
<fieldset><legend>Produto Excluído</legend>
<p>O produto  <?php echo $codproduto; ?> foi excluído com sucesso.</p>
<hr color="#CCCCCC" size="1" />
<a href="excluiproduto.php">Consultar outro produto para excluir</a>
</fieldset>

