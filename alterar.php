<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALterar</title>
  <!-- <script>
    function verifica(nome,email){
        if(nome == "" || email == ""){
            alert("Nome e Email são obrigatórios");
            return false;
        }else{
            return true;
        }

    }
  </script>
  -->
</head>
<body>

<div class="men">
    <?php
      $codigo = $_GET['cod'];
      require('connect.php');
      $buscar = mysqli_query($con, "Select * from `tb_viagem` where `codigo` = '$codigo'");
      $contato = mysqli_fetch_array($buscar);
?> 
</div>

<div class="">
<div class="">
    <fieldset id="">
        <legend>Formulario de cadastro</legend>
        
        <form action="alterar.act.php" method="post" onsubmit="return verifica(local.value,data.value,preco.value)" enctype="multipart/form-data">
        <input type="hidden" name="codigo"  value="<?php echo $contato['codigo'];?>">
        <input type="hidden" name="foto_anterior"  value="<?php echo $contato['foto'];?>">
            <p class="">Local</p>
            <input type="text" name="local" id="box-input"
             value="<?php echo $contato['local'];?>">
            <p class="">Data</p>
            <input type="date" name="data" id="" 
             value="<?php echo $contato['data'];?>">
            <p class="">Preço</p>
            <input type="text" name="preco" id="box-input" 
             value="<?php echo $contato['preco'];?>">
            <br><br>
            <p><input type="file" name="foto" id=""></p>
            <input type="submit" value="Enviar" class="botao" value="Gravar">
            
        </form>
        
    <?php
    session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset ($_SESSION['msg']);
    }
    ?>
    </fieldset>

</div>   
</div>
    
</body>
</html>