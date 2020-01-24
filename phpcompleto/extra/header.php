<?php session_start(); 

    if(!isset($_SESSION['cliente']));  
?> 
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema </title>
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

<body>

	<div class="container"style="width:100%;">
	<header class="header">
   		
   <nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<h3>Comércio</h3>
		</div>
		<!-- Links da barra de navegação -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#....">Home</a></li>
			
				<li><a href="produtos22.php">Produtos</a></li>
				<li><a href="buscaprodutos.php">Pesquisar</a></li>
				<li><a href="faleconosco.php">Fale Conosco</a></li>
			</ul>
			
		
	

<ul class="nav navbar-nav navbar-right">
      <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <?php if(isset($_SESSION['cliente'])) { ?>
									<li>Logado como <?php echo $_SESSION['cliente']; ?>
										<b class="caret"></b></a>
											<ul class="dropdown-menu">
											<li><a href="cliente-sair.php">Sair</a></li>
										</ul>
									</li>				
						<?php } else { ?>
							<li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
							<li><a href="admin/login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Acesso Restrito</a></li>
						<?php } ?>
								 <ul class="dropdown-menu">
                                    <li><a href="usuario-sair.php">Sair</a></li>
                                </ul>
        </li>



      
      
				  
        
				
      </ul>
	  </nav>
	  </div>
</header>