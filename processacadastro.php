 <?php
 
  require_once 'conexao.php';
  
 $nome = $_POST ['nome'];
 $dtnasc = $_POST ['dia'];
 $rg = $_POST ['rg'];
 $cpf = $_POST ['cpf'];
 $email = $_POST ['email'];
 $rua = $_POST ['rua'];
 $numero = $_POST ['numero'];
 $cidade = $_POST ['cidade'];
 $estado = $_POST ['estado'];
 $bairro = $_POST ['bairro'];
 $cep = $_POST ['cep'];
 $login = $_POST ['login'];
 $senha = $_POST ['passconfirm'];
 
 $sql  = "insert into clientes values(default,'$cpf','$nome','$dtnasc','$rg','$email','$numero','$cidade','$estado','$bairro','$cep','$rua','$login','$senha')";
 $query = mysqli_query($pdo,$sql);
 $linhas = mysqli_affected_rows ($pdo);
 
 if ($linhas>0){
 print "Sucesso";
 print "<a href= 'index.php'> Logar</a>";
 }else{
	  print "<a href= 'cadastro.php'>Repetido usuário</a>";
 }
 ?>