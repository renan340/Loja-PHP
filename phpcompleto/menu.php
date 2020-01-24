 <!DOCTYPE html>
<html lang="pt">
<head>
  <title>Tempero de Família</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/menu.css" >     
   

</head>
<body>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid" >
    <div class="navbar-header"  ">
      <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Home</a>
    </div>
    <ul class="nav navbar-nav"   >
      <li><a href="buscaprodutos.php"><i class="far fa-edit"></i> Pedidos</a></li>
      <li><a href="produtos22.php"><i class="fas fa-utensils"></i> Pratos</a></li>
      <li><a href="faleconosco.php"><i class="fas fa-phone-square"></i> Fale Conosco</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right"  >
      <?php
        if(!isset($_SESSION['nomecliente'])){
        ?>
      <li><a href="cadcliente.php"><span class="glyphicon glyphicon-user"></span> Cadastrar-se</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       <?php
        } else{
echo "
          <li class='nav-item'  >
              <div class='text-light'> Olá, " . $_SESSION['clientenome']  ." </div>
          </li>
          <li class='nav-item'>
              <a class='nav-link' href=logoff.php>Sair</a>
          </li>";

        }
                    ?>
       <li><a href="carrinho.php"><i class="fas fa-shopping-cart"></i> Itens de Pedido</a></li>
      <li><a href="admin/login.php"><i class="fas fa-user-shield"></i> Acesso Restrito</a></li>
    </ul>
  </div>
</nav>

