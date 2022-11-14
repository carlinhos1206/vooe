<?php
extract($_POST);
//$senha = md5($senha);


require('connect.php');
@session_start();
$buscar = mysqli_query($con, "select * from `tb_cadastro` where `email` = $email" );
$msg = "email ou senha invalidos";

    if($buscar -> num_rows == 1){
        $login = mysqli_fetch_array($buscar);
        if($senha === $login['senha']){
            $_SESSION['login'] = true;
            $_SESSION['email'] = $login['email'];
            $target = "location:home.php";
        } else {
            $target = "location:login.php";
            $msg = "email ou senha invalidos ";

        }

    }
    $_SESSION['msg'] = $msg;
    header($target);
