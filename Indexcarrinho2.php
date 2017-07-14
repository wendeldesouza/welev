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
   <?php
       // VALIDACAO PELA SESSAO
        $sessao = $_SESSION['pedido'];
        $consulta = $pdo -> prepare("SELECT * FROM  carrinho_temporario WHERE
        temporario_sessao = :ses ");
        $consulta -> bindValue(':ses', $sessao);
        $consulta -> execute();

        $linhas = $consulta ->  rowCount();      
  ?>        <section>
            <h1>PRODUTOS
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
            </section>
         
            <p><a href ="carrinho2.php" type="button" class="btn btn-danger">Carrinho <?= $linhas; ?>
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 
            </button></a></p>
  </header>
</section> 
<body>


  
<?php
      // MOSTRAR OS PRODUTOS NA PAGINA DE CARRINHO
      $consulta = $pdo -> prepare("SELECT * FROM  carrinho_produtos ");
      $consulta -> execute();

      $linhas = $consulta ->  rowCount(); 


?>
  <div class="row">
<?php foreach($consulta as $mostra):?>
   <div class="col-xs-6 col-md-3 col-md=offset-3"> 
    <div class="thumbnail"> 
             
    <article class = "img_colchoes" >

    <h2><?= $mostra['produto_nome']?></h2>
    <img src = "img_carrinho/<?= $mostra['produto_img']?>"  alt="Nome da Empresa: Ortobom" title ="Modelo: <?= $mostra['produto_nome']?>">             
    <p> por: R$ <?= number_format ($mostra['produto_preco'], 2,',','.' )?> 
    </p>
      <p><a href="comprar2.php?prod=<?= $mostra['produto_id']?>" class="btn btn-primary" role="button">Adicionar
      <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 
      </a></p>
     
    </div>
   </div>  
  <?php endforeach; ?> 
  </div> 
    </article> 
</body>
</div><!--fim container -->
</html>                 
  



