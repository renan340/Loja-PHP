<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/biblioteca.css">
    <title>Comércio</title>
    
    <script>

function confirmar() {
	var x  = confirm('Deseja realmente excluir?');
	
	if(x) {
		return true;
	} else {
		return false;
	}
}	

</script>
</head>

<body>

    <?php
        include ('menu.php');
    
  
    
        include ('conexao.php');

        $codproduto = $_REQUEST['codproduto'];

        $sql = "select * from produto where codproduto=$codproduto";

        $resultado = mysqli_query($conexao, $sql);

        $dados = mysqli_fetch_array($resultado);
        ?>
    

       
        <hr>


        <section class="container">
        <br> <br> <br> <br> <br>
            
            <div class="row">
            
            <div class="col-lg-4 col-md-12">
                <img src="fotos/<?=$dados['imagem']; ?>" alt="imagem" class="w-75 h-75">
            </div>



            <div class="info col-lg-8 col-md-12">
                <div class="titulo">
                    <h3><?= $dados['descricao']; ?></h3>
                </div>

                <div class="genero">
                    <b>Categoria:</b> <?= $dados['categoria'];?>
                </div>
     
                <div class="preco">
                    <b>Preço: </b>   <?php echo "R$ ";
			   echo $dados['preco']; ?>
                </div>

                <div class="compra">
                    <div class="botao">
                        <a class="btn btn-primary" href="carrinho.php?acao=add&codproduto=<?php echo $dados['codproduto']?>" >Comprar</a>
                    </div>
                </div>
            </div>
</div>
        </section>
        
        <hr>
        
<script>
   /*
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	*/</script>	
		<script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>

<?php include "footer.php";?>
</body>

</html>
