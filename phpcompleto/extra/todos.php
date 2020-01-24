<?php
include "conexao.php";
$angka = substr(uniqid(rand(), true), 7, 7);
$order = preg_replace("/[^0-9]/", "",$angka);
?>
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-padding-16">Produto:</h3>
  </div>

    <!--Imagens diretas do banco-->
	<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro de Produto</title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
		</script>
 </head> 
<body>
    <div class="container">
        <div class="row">
        <?php
        $stmt = $dbh->prepare("SELECT * FROM produto where categoria='natureza'");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
        ?>           
		  <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="thumbnail">
			<br>
			<p><br/><strong>Foto</strong>
              <img src="fotos/<?php echo $row['imagem'] ?>" alt="<?php echo $row['imagem'] ?>" style="height:150px;width:100%;">
              <div class="caption text-center">
                <h3><?php echo $row['descricao'] ?></h3>
                <p><br/><strong>Categoria</strong>: <?php echo $row['categoria'] ?><br>
				<strong>Preço</strong>:<?php echo $row['preco']?>
               </p>
              </div>
            </div>
          </div>
           
        <?php
            }
        }
        ?>
        </div>
    </div>
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>