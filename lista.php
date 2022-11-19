
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cadastro</title>

</head>
<body>

<?php include('menu.php');?>

<?php
?>

<?php
      require('connect-viagem.php');
      $cadastros = mysqli_query($con,"Select * From `tb_viagem` ORDER BY `codigo`");
      echo "<div class=\"box\">";
      while($contato = mysqli_fetch_array($cadastros)){
        echo "<div>";
        echo "<p>Código: $contato[codigo]</p>";
        echo "<p>Local: $contato[local]</p>";
        echo "<p>Data: $contato[data]</p>";
        echo "<p>Preço: $contato[preco]</p>";

        //Validação de foto
        if($contato['foto'] != ""){
        echo "<p><img src=$contato[foto]></p>";
        }else{
        echo "<p><img src=imgs/default.png></p>";
        }
        //
          
        echo "<p><a href=alterar.php?cod=$contato[codigo]>Alterar</a></p> ";
        echo "<p><a href=javascript:confirmar($contato[codigo])>Excluir</a></p>";

    

        echo "</div>";
      }
        echo "</div>";
?>

<script>
  
  function confirmar(codigo){
    resposta = confirm("Deseja excluir o registro"+codigo+"?");

    if(resposta == true){
      window.location = "Excluir.php?cod="+codigo;
    }
  }
    
  </script>
  



    
</body>
</html>



