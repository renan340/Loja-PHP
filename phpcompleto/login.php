<?php
session_start();
?>

<body>

    <?php
        include ('menu.php');
    ?>

  
   
     <hr>
<div class="container">
<br><br><br>
  <div class="form-group">
<h1>Login</h1>
<form name="formlogin" method="post" action="fazlogin.php">
	Email:<br> <input type="text" name="email">
	<br>
	Senha:<br> <input type="password" name="senha">
	<br><br>
	<input type="submit" value="Login" class="btn-success">
	<input type="reset" value="Limpar" class="btn-danger">
	
</form>
</div>
</div>

</body>
</html>
