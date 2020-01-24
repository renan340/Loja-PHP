<?php session_start(); ?>
<?php
   if(!isset($_SESSION['cliente']));  
   if(!isset($_SESSION['clientenome']));  
   if(!isset($_SESSION['clienteendereco']));
   if(!isset($_SESSION['clientecep']));
   if(!isset($_SESSION['clientetelefone']));
   if(!isset($_SESSION['clientecpf']));   
   if(!isset($_SESSION['clienteemail']));  
   if(!isset($_SESSION['clientesenha']));    
   if(!isset($_SESSION['clienteemail']));
   if(!isset($_SESSION['clientesenha']));
?>
<?php require "admin.php"; 
include('conexao.php');?>
<div class="col-md-10">
	<div class="row">
	<div class="col-md-12">
	<div class="content-box-large">
	<div class="panel-heading">
	<div class="panel-title">
	<h1>Dados do Cliente</h1>
		Seu código de Cliente é  <?php echo $_SESSION['cliente']; ?>
	
	</div>

	<div class="panel-options">
		<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
		<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
	</div>
	</div>
	<div class="panel-body">
	<table class="table table-strip">
		<thead>
			<tr>
				<th width="244">NOME</th>
				<th width="244">ENDEREÇO</th>
				<th width="244">CEP</th>
				<th width="244">TELEFONE</th>
				<th width="244">CPF</th>
				<th width="244">E-MAIL</th>
				<th width="244">SENHA</th>
			</tr>
			
		</thead>
		<tbody>
		
		<?php echo '<td>';?>  <?php echo $_SESSION['clientenome']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $_SESSION['clienteendereco']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $_SESSION['clientecep']; ?>
		<?php echo '</td>';?>
	
		<?php echo '<td>';?>  <?php echo $_SESSION['clientetelefone']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $_SESSION['clientecpf']; ?>
		<?php echo '</td>';?>
		<?php echo '<td>';?>  <?php echo $_SESSION['clienteemail']; ?> 
		<?php echo '</td>';?>
		<?php echo '<td>';?> <?php echo $_SESSION['clientesenha']; ?>
		<?php echo '</td>';?>
		
		
	</div> 
		
        <td><a href="?acao=del&cliente" class="btn btn-danger">Remover</td>
		<td><a href="?acao=alterar&cliente" class="btn btn-success">Alterar</td>
		</tr>' ;
	
				
		
 </table>
	</div>
	</div>
  	</div>
  	</div> 
    </div>
	</div>		  		
	</div> 	
	</div>
	</div>
    </div>
	</section>			
 </section>
  <?php require "footer.php" ?> 