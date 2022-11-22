

<?php
 
 echo $texto = $_GET['texto'];

 require('connect-viagem.php');
 $cadastros = mysqli_query($con, "Select * from `tb_viagem` where   `local` like '%$texto%'");
 echo "<div class=geral>";

            while($contato = mysqli_fetch_array($cadastros)){
                echo "<div class=box>";
                echo "<p>Local:$contato[local]</p>";
                echo "<p>Data:$contato[data]</p>";
                echo "<p>Preço:$contato[preco]</p>";
                echo "<p><img src=$contato[foto]></p>";
            }

            echo "</div>";

            // @session_start();
            // if($_SESSION['funcao'] == "admin"){
            //   echo "<p><a href=alterar.php?cod=$contato[codigo]>Alterar</a></p>";
            //   echo "<p><a href=javascript:confirmar($contato[codigo])>Excluir</a></p>";
            // }else{
            //   echo "<p><a href=comprar.php?cod=$contato[codigo]>Comprar</a></p>";
            // }




?>