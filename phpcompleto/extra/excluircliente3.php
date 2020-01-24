<?php
$codcliente = $_POST["codcliente"];
$r = $_POST["resp"];
if ($r == "N")
   header("Location: excluircliente.php");
else if($r == "S"){
   include("conexao.php");
   
   $sql = "DELETE FROM cliente WHERE codcliente = $codcliente";
 mysqli_query($conexao, $sql);
}
?>
<fieldset><legend>Cargo Excluído</legend>
<p>O cliente de código <?php echo $codcliente; ?> foi excluído com sucesso.</p>
<hr color="#CCCCCC" size="1" />
<a href="excluircliente.php">Consultar outro cliente para excluir</a>
</fieldset>
</body>
</html>
