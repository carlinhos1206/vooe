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
                <img id="vooe" src="imgs/branco.png" alt="" width="110px" height="110px">
            </div>
            <div class="center">

            </div>
            <div class="dire">
              
            
                
            </div>
        </div>
    </div>
        <div class="viagens">


            
        </div>
        <?php
        session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
        ?>



<?php

        require('connect-viagem.php');
        $cadastros = mysqli_query($con,"Select * From `tb_viagem` ORDER BY `codigo`");
        echo "<div class=\"box\">";
        while($contato = mysqli_fetch_array($cadastros)){
          echo "<div class=\"sc\">";
         
          //Validação de foto
          if($contato['foto'] != ""){
          echo "<p><img src=$contato[foto]></p> ";
          }else{
          echo "<p><img src=imgs/default.png></p>";
          }

          echo "<p id= pag >Local: $contato[local]</p>";
          echo "<p id= pag >Data: $contato[data]</p>";
          echo "<p id= pag  >Preço: $contato[preco]</p>";
          echo "<h3 id= pag ><a href=comprar.php>COMPRAR</a></h3>";

          echo "</div>";
         
        }
        echo "</div>";

       
        
            // require('connect.php');
            // echo "<div class =\"cadd\">";
            // $contatos = mysqli_query($con, "Select * from `tb_cadastro`");
          
            
            // while($con = mysqli_fetch_array($contatos)){
            //     echo "<div class =\"dados\">";
           
            //     echo "<p>Código: $con[codigo] </p>";
            //     echo "<p>Nome: $con[nome] </p>";
            //     echo "<p>Email: $con[email] </p>";
            //     echo "<p>cpf: $con[cpf] </p>";
                
                 
               
            //      echo "</div>";
              
        //     // }
           
        //     echo "</div>";
        // 
        // <script>
        // function confirmar(codigo){
        //     resposta = confirm ("Deseja excluir o registro "+codigo+"?");
        //     if(resposta == true){
        //         window.location = "excluir.php?cod="+codigo;
        //     }
        // }

        // </script>
        ?>


</body>
</html>