<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="pai">
        <form action="cad.cadastro.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Cadastro</legend>
                
                <div class="inp">
                <p>Nome:</p>
                <input type="text" name="nome" id="">
                
                <p>Email:</p>
                <input type="email" name="email" id="">

                <p>CPF:</p>
                <input type="text" name="cpf" id="">

                <p>Senha:</p>
                <input type="password" name="senha" id="">

                <p><input type="submit" value="CONTINUAR" id=""></p>

                </div>
            </fieldset>
        </form>
    </div>
    
</body>
</html>