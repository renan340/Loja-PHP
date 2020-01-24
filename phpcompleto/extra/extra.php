<?php include "header.php" ?>
<div class="container-fluid">
<div class="form-group">
<form action="gravarfale.php" method="post" name="dados">
 </br> </br> </br>
 <h1> Fale Conosco </h1>
 </br>
	  </br>
   <label>Nome:</label> </br>
   <input id="nome" name="nome" type="text"  class="form-control">
   </br>
   <label>E-mail:</label> </br>
   <input id="email" name="email" type="text"  class="form-control">
   </br>
   <label>Mensagem:</label> </br>
   <textarea class="form-control" id="message" name="mensagem" rows="5"></textarea>
   </br>
	  </br>
	<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
    <button type="reset" class="btn btn-danger btn-lg">Limpar</button>
	 </br>
	  </br>
</form> 
</div>
<?php include "footer.php" ?>