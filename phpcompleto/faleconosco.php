<?php
session_start();
?>


    <?php
        include ('menu.php');
    ?>

  
   
     <hr>
	
<script language="JavaScript" >
function enviardados(){
 
if(document.dados.nome.value=="" || document.dados.nome.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.dados.nome.focus();
return false;
}
 
 
if( document.dados.email.value=="" || document.dados.email.value.indexOf('@')==-1 || document.dados.email.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL corretamente!" );
document.dados.email.focus();
return false;
}
 
if (document.dados.mensagem.value=="")
{
alert( "Preencha o campo MENSAGEM!" );
document.dados.mensagem.focus();
return false;
}
 
if (document.dados.mensagem.value.length < 50 )
{
echo( "É necessario preencher o campo MENSAGEM com mais de 50 caracteres!" );
document.dados.mensagem.focus();
return false;
}
 
return true;
}
 
</script>	
	
	
	<section class="container-fluid">
	<br><br><br>
	<h1>Fale Conosco</h1>

	<form action="gravar.php" method="post" name="dados" >
 
	
	<div class="container">
	<div class="row">
	<br/>
	<br/>
      <div class="col-md-6 col-md-offset-3">
          <form class="form-horizontal" action="pagina de ação" method="post" name="dados" onSubmit="return enviardados();">
          <fieldset>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nome:</label>
              <div class="col-md-9">
                <input id="name" name="nome" type="text"  class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail:</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Mensagem:</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="mensagem" rows="5"></textarea>
              </div>
            </div>
			
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
			  <br/>
			<br/>
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                <button type="reset" class="btn btn-danger btn-lg">Limpar</button>
              </div>
            </div>
          </fieldset>
          </form>
      </div>
	</div>
</div>
	
	
	
	
	</section>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php include("footer.php"); ?>