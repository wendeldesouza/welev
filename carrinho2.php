<?php
    session_start();
    require'conexao.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>WELEV - Compras !!</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <!-- minha página de css -->
  
  <link  rel="stylesheet" href="css/novo.css"  >
  
</head>
<div class="container-fluid">

<section>
	<header>
		<h1> CARRINHO
         <a href ="sistema.php"  type="button" class="btn btn-info">Home
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button></a>
            <a href ="index.php"  type="button" class="btn btn-info"> Sign UP
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </button></a>
            <a href ="logout.php" type="button" class="btn btn-info">Sair
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
            </button></a>
      </h1>   

     <p><a href ="Indexcarrinho2.php" type="button" class="btn btn-danger">PRODUTOS
     <span class="glyphicon glyphicon-gift" aria-hidden="true"></span></button></p></a>
	</header>
</section>
<body>
 <article class = "img_colchoes" >    
       <table class="table table-hover">   
<?php
    $sessao = $_SESSION['pedido'];
    $consulta = $pdo -> prepare("SELECT * FROM  carrinho_temporario WHERE temporario_sessao = :ses ");
    $consulta -> bindvalue(':ses', $sessao);
    $consulta -> execute();

    $linhas = $consulta ->  rowCount();

    $total = 0;
    foreach($consulta as $mostra):
        //$valor = $mostra['temporario_quantidade'] * $mostra['temporario_preco'];
        //$total += $valor;
        $total += $mostra['temporario_preco'];;
        $prod = $mostra['temporario_produto'];
        $consultar = $pdo -> prepare("SELECT * FROM  carrinho_produtos WHERE produto_id = :prod ");
        $consultar -> bindvalue(':prod', $prod);
        $consultar -> execute();
            foreach($consultar as $mostrar):
                   $produtos = $mostrar['produto_nome']; 
                   $preco = $mostrar['produto_preco'];
            endforeach;
?>           
              <tr>    
                  <td><p><?= $produtos; ?></p></td>
                  <form method="post">
                          <td><P><input type="number" name="id" value="<?= $mostra['temporario_id']?>" style="display:none;">
                          <input type="number" name="quantidade" value="<?= $mostra['temporario_quantidade']?>">&nbsp;
                          <button class="btn btn-success" type="submit" name=" alterar">Alterar</button></p>    
                          <?php
                               if(isset($_POST['alterar'])):
                                  $qtde = filter_input(INPUT_POST,'quantidade');
                                  $id = filter_input(INPUT_POST,'id');;

                                  echo '<script>window.location="alterar.php?qtd='.$qtde.'&preco='.$preco.'&ref='.$id.'"</script>';
                                  
                               endif;   
                          ?> 
                          </td>
                          <td><p><?= number_format($mostra['temporario_preco'], 2,',','.');?></p></td>
                          </form>    
                          <td><p>
                          <a href="excluir-produto.php?ref=<?= $mostra['temporario_id']?>" 
                           class="btn btn-primary" role="button">Excluir 
                          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 
                          </a></p></td> 

              </tr> 
              <?php endforeach; ?>
               <tr>
                   <td class="info"> Total da Compra R$ <?= number_format($total, 2,',','.');?> </td>
               </tr>   
               </table>
                <a href="finalizar-pedido.php?total=<?= $total ?>"class="btn btn-primary" role="button">Comprar</a>
              </article> 
     
</body>
</div><!--fim container   <span class="glyphicon glyphicon-usd" aria-hidden="true"></span> -->
</html>                 
  



 