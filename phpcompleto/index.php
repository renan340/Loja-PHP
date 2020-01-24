<?php
session_start();
include('conexao.php');
$sql = "select * from produto";
//fazer o filtro de acordo com o campo do banco de dados escolhido
$sql2 = "SELECT * FROM produto";
$resultado2 = mysqli_query($conexao,$sql2);
$resultado = mysqli_query($conexao,$sql);
?>

    <?php
        include ('menu.php');
    ?>
<div class="container">
 
        <hr>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
         <div class="carousel-inner">
             <div class="item active">
                <img class="d-block w-100" src="img/j1.jpg"  width="100%"  >
             </div>
            <div class="item">
              <img class="d-block w-100" src="img/j2.jpg" width="100%" alt="Second slide">
            </div>
            <div class="item">
              <img class="d-block w-100" src="img/j3.jpg" width="100%" >
            </div>
      		<div class="item">
               <img class="d-block w-100" src="img/j4.jpg" width="100%" >
            </div>
         </div>
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
 <section class="container">
    <div class="frase container">
                <h3> Os mais pedidos</h3>
                <hr>
    </div>
   
            <div class="row">
                <?php
                $i = 1;
                do {
                    ($dados = mysqli_fetch_array($resultado)); 
                ?>     
    <div class="col-lg-2 container">
       <div class="foto">
        <a href="produtop.php?codproduto=<?= $dados['codproduto']; ?>">
        <img src="fotos/<?= $dados['imagem']; ?>" alt=""  width="100%"class="img-fluid"></a>
      </div>
      <div class="descricao">
      <h5><?php echo $dados['descricao']; ?> </h5>
     <p><?php echo $dados['categoria']; ?></p>
   <p><?php echo "R$ ";
         echo $dados['preco']; ?></p>
    </div></div>
                
    <?php
       $i++;
         } while ($i<13);
       ?>
     </div>
    </section>
    <section class="container row-fluid">
      <div class="frase">
        <h3>Sugestões para o dia a dia</h3>
         <hr>
         <div class="row">
          <?php
          $i = 1;
          do {
          ($dados = mysqli_fetch_array($resultado2)); 
          ?>
           <div class="col-lg-2 container">
              <div class="foto">
                <a href="produtop.php?codproduto=<?= $dados['codproduto']; ?>">
                <img src="fotos/<?= $dados['imagem']; ?>" alt="" width="100%" class="img-fluid"></a>
             </div>
            <div class="descricao">
              <h5><?php echo $dados['descricao']; ?></h5>
              <p><?php echo $dados['categoria']; ?></p>
        <p><?php echo "R$ ";
         echo $dados['preco']; ?></p>
                            </div>
                        </div>
                
                <?php
                    $i++;
                        } while ($i<6);
                ?>

            </div>
            </div>


        </section>

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </div>
<?php include "footer.php";?>

