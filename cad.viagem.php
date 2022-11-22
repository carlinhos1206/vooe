<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad.viagem.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <title>Cadastro de Viagem</title>
</head>
<body>
  


    <div class="pai">
        <div class="esq">
            <H1>cadastre sua viagem</H1>
        </div>
        <form action="lista.act.php" method="post" enctype="multipart/form-data">
            <fieldset>
              

                <div class="inp">
                <p>Destino:</p>
                <input type="text" name="local" id="">
                
                <p>Data:</p>
                <input type="date" name="data" id="">

                <p>Preço:</p>
                <input type="text" name="preco" id="">

                <p>Foto:</p>
                <input id="ft" type="file" name="foto" id="" >

                <p><input type="submit" value="CONTINUAR" id=""></p>

                </div>
        
            </fieldset>
           
        </form>
    </div>
    
</body>
</html>