<?php

$codigo  = $_GET['cod'];
require('connect-viagem.php');

if(mysqli_query($con, "DELETE FROM `tb_viagem` WHERE `tb_viagem`.`codigo` = $codigo")){
    $msg = "<p class= sucesso> Excluido com sucesso!</p>";
}else{
    $msg = "<p class= erro> Erro ao excluir!</p>";
}


@session_start();
$_SESSION['msg'] = $msg;


header("location: lista.php");



?>