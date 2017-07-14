<?php



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<title> WELEV </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cadastro.css" media="all" />
</head>
<body>
<h1><center> WELEV </center></h1> 
<center><h2> TELA DO ADMINISTRADOR </h2></center>
<fieldset>
<legend><h2>CONTROLE DE CLIENTES</h2></legend>
	<input type=text placeholder="Digite o cpf ou login do cliente" size="50%" />
	<input type="button" name="botao-ok" value="Ir">
		<br>
		<br>

<TABLE BORDER=1> 
	<TR> 
		<TD>Login </TD> 
		<TD>CPF </TD>
		<TD>Nome </TD>
		<TD>Endereco </TD>
		<TD>Status Pedido </TD>
	</TR> 
	<TR> 
		<TD> </TD>
		<TD> </TD>
		<TD> </TD>
		<TD> </TD>
		<TD> </TD>
	</TR>
</TABLE>	
</fieldset>

<p class="submit">
		<center>
			<input  type="reset" value="incluir">
			<input type="reset" value="alterar">
			<input type="reset" value="excluir">
		</center>
		<br>
	</p>
	<br>
	
	
<fieldset>
<legend><h2>CONTROLE DE PRODUTOS</h2></legend>
	<input type=text placeholder="Digite o código ou nome do produto" size="50%" />
	<input type="button" name="botao-ok" value="Ir">
		<br>
		<br>
	
<TABLE BORDER=1> 
	<TR> 
		<TD>Cod. Produto </TD> 
		<TD>Nome </TD>
		<TD>Valor </TD>
		<TD>Estoque </TD>
	</TR> 
	<TR> 
		<TD> </TD>
		<TD> </TD>
		<TD> </TD>
		<TD> </TD>
	</TR>
</TABLE>
</fieldset>	
	<p class="submit">
		<center>
			<input type="reset" value="incluir">
			<input type="reset" value="alterar">
			<input type="reset" value="excluir">
		</center>
	</p>
	<br>
	<p align=Right>
	<a href='sistema.php'><input type="submit" value="home"/></a>
	</p>
	</body>

</html>