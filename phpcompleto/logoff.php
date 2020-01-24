<?php
session_start();
unset( $_SESSION['cliente'] ); //mata somente uma variável
session_destroy(); //mata as variáveis de sessao
?>
<script>
	location.href="login.php";
</script>
