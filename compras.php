			<!DOCTYPE html>

			<html lang="PT-br" id="compras">
				<head>
					<title> COMPRAS</title>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link href="Cadastro.css" rel="stylesheet">
					
				</head>
			<body>
				<h1><center> WELEV - FINALIZAR COMPRA </center></h1> 
				<h2><center> DADOS PESSOAIS </center></h2><br />
					<fieldset>
 <table cellspacing="7">
  <tr>
   <td>
    <label for="nome">Nome Completo: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" maxlength="30">
   </td>
  </tr>
  <tr>
   <td>
    <label>Data de Nascimento: </label>
   </td>
   <td align="left">
    <input type="text" name="dia" size="2" maxlength="2" value="dd"> 
   <input type="text" name="mes" size="2" maxlength="2" value="mm"> 
   <input type="text" name="ano" size="4" maxlength="4" value="aaaa">
   </td>
  </tr>
  <tr>
   <td>
    <label for="rg">RG: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="13"> 
   </td>
  </tr>
  <tr>
   <td>
    <label>CPF:</label>
   </td>
   <td align="left">
    <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
   </td>
  </tr>
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
  </tr>
 </table>
</fieldset></p>


<br />
							<h2><center> DADOS PARA PAGAMENTO </center></h2><br />
								 <fieldset>
 <table cellspacing="7"><tr>
   <td>
    <label>Forma de Pagamento:</label>
   </td>
   <td align="left">
    <select name="pagamento"> 
    <option value="01">SELECIONE</option> 
    <option value="02">Cartão de Crédito</option> 
    <option value="03">Cartão de Débito</option> 
   <option value="04">Boleto</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="nome">Nome Impresso: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" maxlength="30">
   </td>
  </tr>
   <tr>
   <td>
    <label for="nome">Número Cartão: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" maxlength="30">
   </td>
  </tr>
  <tr>
   <td>
    <label>Validade: </label>
   </td>
   <td align="left">
   <input type="text" name="mes" size="2" maxlength="2" value="mm"> 
   <input type="text" name="ano" size="4" maxlength="4" value="aaaa">
   </td>
  </tr>
  <tr>
   <td>
    <label for="codigo">Código de Segurança: </label>
   </td>
   <td align="left">
    <input type="text" name="rg" size="13" maxlength="4"> 
   </td>
  </tr>
  
  
  <td>
    <label>Bandeira:</label>
   </td>
   <td align="left">
    <select name="bandeira"> 
    <option value="01">SELECIONE</option> 
    <option value="02">Mastercard</option> 
    <option value="03">Visa</option> 
   <option value="04">ELO</option> 
   </select>
   </td>
  </tr>
 
 </table>
</fieldset></p>
					</div> 			
						</form>
						<p align=Right>
						</br></br><input type="submit" id="tchau" value="Finalizar Pedido" />
			</p>
					</div>
		   
			</body>
			</html>