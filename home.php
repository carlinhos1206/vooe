<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imgs/vooe.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  

    <div class="corpo">
        <div class="menu">
            <div class="esq">
            </div>
            <div class="center">

            </div>
            <div class="dire">
              
                <div class="login"> <a href="login.php"> <h4> LOGIN </h4> </a></div>
                
            </div>
        </div>

        <div class="txt">
            <h1> Viaje com a VOOE!</h1>
        </div>
    </div>
    
       


<?php


        require('connect-viagem.php');
        $cadastros = mysqli_query($con,"Select * From `tb_viagem` ORDER BY `codigo`");
        echo "<div class=\"box\">";
        while($contato = mysqli_fetch_array($cadastros)){
          echo "<div class=\"sc\">";
         
          //Valida????o de foto
          if($contato['foto'] != ""){
          echo "<p><img src=$contato[foto]></p> ";
          }else{
          echo "<p><img src=imgs/default.png></p>";
          }

          echo "<p id= pag >Local: $contato[local]</p>";
          echo "<p id= pag >Data: $contato[data]</p>";
          echo "<p id= pag  >Pre??o: $contato[preco]</p>";
          echo "<h3 id=pag ><a href=login.php>COMPRAR</a></h3>";

          echo "</div>";
         
        }
        echo "</div>";

       
        
            
        ?>


</body>
</html>