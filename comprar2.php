<?php
     session_start();
     require 'conexao.php';

     $produto = filter_input(INPUT_GET,'prod');

     $consulta = $pdo -> prepare("SELECT * FROM  carrinho_produtos WHERE produto_id = :prod");
     $consulta ->bindValue(':prod',$produto);
     $consulta ->execute();

     $linhas = $consulta -> rowCount();   
     

     foreach($consulta as $mostra):
              $pre = $mostra['temporario_preco'];
     endforeach;  
     /*pega as informaçoes da tabela carrinho_produto*/
     $produto_id = $mostra['produto_id'];
     $produto_nome = $mostra['produto_nome'];
     $produto_preco = $mostra['produto_preco'];
     $produto_data = date("Y-m-d");
     $produto_quantidade = 1;

     /*VERIFICAR SE ENCONTRA-SE NA LISTA DE CARRINHO TEMPORARIO*/

     $rand = rand(1000,100000); /*criado um uma numeracao para a sessao*/
     
     if(!$_SESSION['pedido']):
         $_SESSION['pedido'] = $rand;
         $sessao = $_SESSION['pedido'];  	
     else:	
         $sessao = $_SESSION['pedido'];
     endif;   

     $consulta = $pdo -> prepare("SELECT * FROM  carrinho_temporario WHERE temporario_produto = :product AND temporario_sessao = :sessao");
     $consulta ->bindValue(':product', $produto_id);
     $consulta ->bindValue(':sessao', $sessao);
     $consulta ->execute();

     $linhas = $consulta ->  rowCount();

     foreach($consulta as $mostra):
             $quantidade = $mostra['temporario_quantidade'];
     endforeach;


    if($linhas >= 1): 
     	  $valor = $quantidade + 1;

        $total = $pre * $valor;
       
        
     	  $altera = $pdo->prepare( "UPDATE carrinho_temporario SET temporario_quantidade = :val, temporario_preco = :total WHERE temporario_sessao = :ses AND temporario_produto = :tp ");
        $altera ->bindValue(':val',$valor);
        $altera ->bindValue(':ses',$sessao);
        $altera ->bindValue(':tp',$produto);
        $altera ->bindValue(':total',$total);
        $altera ->execute();
        if($altera):
             echo '<script type="text/javascript">alert("Mais uma unidade desse produto adicionada ao seu carrinho!");</script>';
             echo '<script>window.location="Indexcarrinho2.php"</script>';
        else:
             echo '<script>alert("produto não pode ser colocado no carrinho")</scripit>';
             echo '<script>window.location="Indexcarrinho2.php"</scripit>';
                         
        endif;  

    else:
         $inserir = $pdo->prepare("INSERT INTO carrinho_temporario (temporario_produto, temporario_quantidade, temporario_preco, temporario_data, temporario_sessao) VALUES (:produto, :qtd, :preco, :data, :sessao)");
              $inserir ->bindValue(':produto', $produto_id);
              $inserir ->bindValue(':qtd', $produto_quantidade);
              $inserir ->bindValue(':preco', $produto_preco);
              $inserir ->bindValue(':data', $produto_data);
              $inserir ->bindValue(':sessao', $sessao);
              $inserir ->execute();

              if($inserir):
                  echo '<script type="text/javascript">alert("Novo produto adicionado no seu carrinho!")</script>';
                  echo '<script>window.location="Indexcarrinho2.php"</script>';
              else:
              	   echo '<script>alert("produto não pode ser colocado no carrinho")</script>';
                   echo '<script>window.location="Indexcarrinho2.php"</script>';
                         
              endif;	
    endif;       

?>


      
