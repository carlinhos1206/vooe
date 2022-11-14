
 <?php include ('home.php'); ?> 
<?php
Session_start();
if(isset($_SESSION['msg'])){
    echo "<p class=alert> $_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}

?>
<?php


extract($_POST);
extract($_FILES);
require('connect.php');
$endereco = "imgs/".md5(time()).".jpg";



if(mysqli_query ($con, "INSERT INTO `tb_cadastro` (`codigo`, `nome`, `email`, `cpf`, `senha`) VALUES (NULL, '$nome', '$email', '$cpf', '$senha');")){
    $msg = "<p class = sucesso>Registro criado com sucesso!</p>";
    }else{
        $msg = "<p class=erro>Erro ao criar registro!</p>";
    }
    session_start();
    $_SESSION['msg'] = $msg;


 header("location: login.php");
