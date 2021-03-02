   <?php

   include("xampp/htdocs/rick-and-morty-api/conexao.php");

   $id = intval($_GET['personagem']);

   $sql_code = "DELETE FROM personagem WHERE id = '$id'";   
   $sql_query= $mysqli->query($sql_code) or die($mysqli->error); 

   if($sql_query)
      echo "
      <script> 
         alert('O personagem foi deletado.')
         location.href='bd.php?p=inicial';
      </script>";
   else
      echo "
      <script> 
      alert ('Não foi possível deletar o personagem.');
      location.href='bd.php?p=inicial';
      </script>";
   ?>

 