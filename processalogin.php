<?php

 $usuario = $_POST['usuario'];
 $senha   = $_POST['senha'];
 
 if($usuario == "maria" and $senha == "123"){
	 session_start();
	 $_SESSION['usuario'] = $usuario;
	 header ("Location:sistema.php");
 }else{
	 print "Dados incorretos!<br>";
	 print "<a href='index.php'>Voltar</a>";
 }
?>