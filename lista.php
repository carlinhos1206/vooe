
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lista.css">
    <title>Compras e Vendas</title>

</head>
<body>

<!-- Arrumar cor da lista -->


<?php include('menu.php');?>



<?php include('pesquisa.php');?>

<?php
      require('connect-viagem.php');
      $cadastros = mysqli_query($con,"Select * From `tb_viagem` ORDER BY `codigo`");
      echo "<div class=\"box\">";
      while($contato = mysqli_fetch_array($cadastros)){
        echo "<div class=\"sc\">";
        // echo "<p>Código: $contato[codigo]</p>";
        echo "<p id= pag >Local: $contato[local]</p>";
        echo "<p id= pag >Data: $contato[data]</p>";
        echo "<p id= pag >Preço: $contato[preco]</p>";
        

        //Validação de foto
        if($contato['foto'] != ""){
        echo "<p><img src=$contato[foto]></p>";
        }else{
        echo "<p><img src=imgs/default.png></p>";
        }
        //

        // $usuarios = mysqli_query($con,"Select * From `tb_cadastro`");
        // $usuario = mysqli_fetch_array($usuarios);
        // var_dump($usuario);
        @session_start();

          if($_SESSION['funcao'] == "admin"){
            echo "<p><a href=alterar.php?cod=$contato[codigo]>Alterar</a></p>";
            echo "<p><a href=javascript:confirmar($contato[codigo])>Excluir</a></p>";
          }else{
            echo "<h3 id= pag ><a href=comprar.php>COMPRAR</a></h3>";
          }

          
        

    

        echo "</div>";
      }
        echo "</div>";

        


?>

<script>
  
  function confirmar(codigo){
    resposta = confirm("Deseja excluir o registro" + "-"+codigo+"?");

    if(resposta == true){
      window.location = "Excluir.php?cod="+codigo;
    }
  }
    
  </script>
 
</body>
</html>



