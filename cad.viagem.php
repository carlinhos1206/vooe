<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad.viagem.css">
    <title>Cadastro de Viagem</title>
</head>
<body>
    <h1>Cadastrar Viagem</h1>


    <div class="pai">
        <form action="lista.act.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Cadastro</legend>
                
                <div class="inp">
                <p>Local:</p>
                <input type="text" name="local" id="">
                
                <p>Data:</p>
                <input type="date" name="data" id="">

                <p>Preço:</p>
                <input type="text" name="preco" id="">

                <p>Foto:</p>
                <input type="file" name="foto" id="">

                <p><input type="submit" value="CONTINUAR" id=""></p>

                </div>
            </fieldset>
        </form>
    </div>
    
</body>
</html>