
<?php
 
 $texto = $_GET['texto'];

 require('connect-viagem.php');
 $cadastros = mysqli_query($con, " Select * from `tb_viagem` where `local` like '%$texto%' or `preco` like '%$texto%' ");

 echo "<div class=geral>";
            while($contato = mysqli_fetch_array($cadastros)){
                echo "<div class=box>";
                echo "<p>Local:$contato[local]</p>";
                echo "<p>Data:$contato[data]</p>";
                echo "<p>Preço:$contato[preco]</p>";
                echo "<p><img src=$contato[foto]></p>";
            }
echo "</div>";

?>