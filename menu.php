<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Document</title>
</head>
<body>


<ul>
    <?php
    @session_start();
     if($_SESSION['funcao'] == "admin"){
       echo "<li class=right><a href=cad.viagem.php>ADICIONAR VIAGEM</a></li>";
       echo "<li class=left><a href=sair.php>SAIR</a></li>";
      }else{
        echo "<li class=left><a href=sair.php>SAIR</a></li>";
      }

    ?>

    
   


    
</ul>

</body>
</html>
