<?php
require('connect-viagem.php');
extract($_POST);
extract($_FILES);

if($foto_anterior == ""){
    $endereco = "imgs/".md5(time()).".jpg";
}else{
    $endereco = $foto_anterior;
}
if($foto['name'] != ""){
    move_uploaded_file($foto['tmp_name'],$endereco);
}


if(mysqli_query($con, "UPDATE `tb_viagem` SET `local` = '$local',
                                                `data` = '$data',
                                                `preco` = '$preco',
                                                `foto` = '$endereco'
                                                WHERE `codigo` = '$codigo';")){
                                                    
                                                    $msg = " Alterado com sucesso!";
                                                }else{
                                                    $msg = " Erro ao sucesso!";
                                                }
header("location:lista.php");      

//echo mysqli_error($con);
?>