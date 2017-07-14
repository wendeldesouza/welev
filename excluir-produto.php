<?php
     session_start();
     require'conexao.php';

     $id = filter_input(INPUT_GET,'ref');

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

?>