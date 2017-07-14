<!DOCTYPE html>
<html>
<head>
<title>teste</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="contato.css" media="all" />
</head>
<body bgcolor="#F8F8FF">
	<form method="POST" onsubmit="validaForm"(); return false; class="form">
		<p class="name">
			<label for="name">Nome:</label>
			<input type="text"  size=50 placeholder="Seu Nome" />
		</p>
		<p class="email">
			<label for="email">E-mail: </label>
			<input type="email" placeholder="mail@exemplo.com.br" />
		</p>
		<p class="text">
			<label for="mensagem">Mensagem</label><br>
			<textarea placeholder="Escreva sua mensagem" /></textarea>
		</p>
		<p class="submit">
			<input type="submit" value="Enviar" />
		</p>
	</form>
</body>
</html>
