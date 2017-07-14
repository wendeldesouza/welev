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
<fieldset>
 <legend><h2>CADASTRO DE PRODUTO</h2></legend>
 <table cellspacing="7">
  <tr>
   <td>
    <label>Categoria:</label>
   </td>
   <td align="left">
    <select name="categoria"> 
    <option value="01">SELECIONE</option> 
    <option value="02">exemplo2</option> 
    <option value="03">exemplo3</option> 
   <option value="04">exemplo4</option> 
   </select>
   </td>
  </tr>
   <td>
	<label>Imagem: </label>
   </td>
		<td>
			<form action="enviar"> 
				<input type="file" name="Arquivo" id="Arquivo" />
				<input type="reset" value="Apagar">
			</form>
		</td>
	</tr>
  <tr>
   <td>
    <label>Nome: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" maxlength="30"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>Descrição: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" maxlength="30"> 
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">Preço: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" maxlength="30"> 
   </td>
  </tr>
 </table>
</fieldset></p>
<center><input type="submit" value= "Confirmar dados" >
 <a href='administrador.php'><input type="reset" value="Voltar"><center/>

</body>
</html>