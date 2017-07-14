<?php

    session_start();
    require 'conexao.php';

         $total = filter_input(INPUT_GET,'total');
         $sessao = $_SESSION['pedido'];
         $consulta = $pdo -> prepare("SELECT * FROM carrinho_temporario WHERE temporario_sessao = :ses"); 
         $consulta -> bindValue(':ses', $sessao);
         $consulta -> execute();
         $linha = $consulta -> rowCount();




         foreach($consulta as $mostra):
              

	     /*pega as informaçoes da tabela temporario_produto*/
	     $produto_id = $mostra['temporario_produto'];
	     $produto_quantidade = $mostra['temporario_quantidade'];
	     $produto_preco = $mostra['temporario_preco'];
	     $produto_data = date("Y-m-d");
	    



         $inserir = $pdo->prepare("INSERT INTO carrinho_pedidos (pedido_produto, pedido_quantidade, pedido_preco, pedido_valor_total, pedido_data, pedido_sessao)
             VALUES ('$produto_id','$produto_quantidade', '$produto_preco', '$total','$produto_data','$sessao')");
         $inserir -> execute();
         endforeach;

         if(!$_SESSION['usuario']):
         	 echo '<script>window.location="index.php"</script>';
         else:
             echo '<script>alert("Pedido Finalizado, Adcione mais produtos")</script>';
         	 echo '<script>window.location="Indexcarrinho2.php"</script>';
             
         endif;	

?>