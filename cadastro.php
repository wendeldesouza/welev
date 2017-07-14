<?php


?>

 <html>
 <head>
 
 <title> WELEV </title>
 <link rel="stylesheet" href="cadastro.css" media="all" />
 <meta name="description" content="Tela de Cadastro">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 </head>

 <body>
  <h1><center> WELEV </center></h1> 
  <h2><center> CADASTRO DO CLIENTE </center></h2><br />

<form method="post" action="processacadastro.php">

<!-- DADOS PESSOAIS-->

<fieldset>
 <legend>DADOS PESSOAIS</legend>
 <table cellspacing="7">
  <tr>
   <td>
    <label for="nome">Nome Completo: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" maxlength="30"placeholder="Digite o seu nome" required autofocus>
   </td>
  </tr>
  <tr>
   <td>
    <label>Data de Nascimento: </label>
   </td>
   <td align="left" required>
    <input type="text" name="dia" size="2" maxlength="2" placeholder="dd" > 
   <input type="text" name="mes" size="2" maxlength="2" placeholder="mm" > 
   <input type="text" name="ano" size="4" maxlength="4" placeholder="aaaa" >
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="7" required> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2" required>
   </td>
  </tr>
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email" required>
   </td>
  </tr>
 </table>
</fieldset></p>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>DADOS DE ENDEREÇO</legend>
 <table cellspacing="7">

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="rua" required>
   </td>
   <td>
    <label for="numero">Número:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4" required>
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade" required>
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left" required>
    <select name="estado"> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro" required>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3" required>
   </td>
  </tr>
 </table>
</fieldset></p>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>DADOS DE ACESSO</legend>
 <table cellspacing="7">
  <tr>
   <td>
    <label for="login">Login: </label>
   </td>
   <td align="left">
    <input type="text" name="login"  maxlength="12"required>
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" maxlength="10" name="pass" required>
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" maxlength="10" name="passconfirm" required>
   </td>
  </tr>
 </table>
</fieldset>
<br />
<center><input type="submit" value= "Confirmar Dados" >
<a href='index.php'><input type="submit" value="Voltar"><center/>
</form>
 </body>
</html>