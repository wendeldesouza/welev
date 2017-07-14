<?php
     session_start();
     require'conexao.php';



     $id = filter_input(INPUT_GET,'ref');
     $preco = filter_input(INPUT_GET,'preco');
     $qtd = filter_input(INPUT_GET, 'qtd');

     $consulta = $pdo ->prepare("SELECT * FROM carrinho_temporario WHERE temporario_id = :id");
     $consulta -> bindValue(':id',$id);
     $consulta -> execute();

     $valor = $preco * $qtd;
     
     if($qtd <= 0):
     	 $deletar = $pdo ->prepare("DELETE FROM carrinho_temporario WHERE temporario_id = :id");
	     $deletar -> bindValue(':id',$id);
	     $deletar -> execute();

	     if($deletar):
	             echo '<script type="text/javascript">alert("Produto excluido com sucesso!");</script>';
	             echo '<script>window.location="carrinho2.php"</script>';
	     else:
	             echo '<script>alert("Produto não pôde ser excluido!")</scripit>';
	             echo '<script>window.location="carrinho2.php"</scripit>';
	                         
	     endif;  


     else:

     $altera = $pdo -> prepare("UPDATE carrinho_temporario SET temporario_quantidade = :val, temporario_preco = :preco WHERE temporario_id = :tp");
     $altera -> bindValue(':val',$qtd);
     $altera -> bindValue(':preco',$valor);
     $altera -> bindValue(':tp',$id);
     $altera -> execute();
     if($altera):
             echo '<script type="text/javascript">alert("Unidade do Produto alterada com sucesso!");</script>';
             echo '<script>window.location="carrinho2.php"</script>';
     else:
             echo '<script>alert("produto não pode ser colocado no carrinho")</scripit>';
             echo '<script>window.location="carrinho2.php"</scripit>';
                         
     endif;
     endif;  

?>