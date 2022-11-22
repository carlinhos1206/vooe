<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="imgs/vooe.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

</head>
<body>
    <?php
    @session_start();
if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }

        ?>
    <div class="box">

        <div class="vooe">
        <img src="imgs/branco.png" alt="" width="150px" height="150px">
    </div>
    <div class="txt">
        <h1>Seja bem vindo</h1>
        <h6>Faça seu login e começe a viajar</h6>
    </div>
    <div class="log">
    <div></div>
     <form action="login.act.php" method="post">
        
        <fieldset>
            <legend>login</legend>

            <input type="text" name="email" placeholder="E-mail">
            <input type="password"  name="senha" placeholder="Senha:">
            <input id="dif" type="submit" value="CONTINUAR">

            <h4>Ainda não tem cadastro? <a href="cadastro.php"> cadastre-se</a></h4>

        </fieldset>
     </form>
    </div>
     </div>
    
   
 
</body>
</html>