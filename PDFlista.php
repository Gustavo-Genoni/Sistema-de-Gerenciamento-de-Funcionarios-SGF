<?php
    include_once("conexao.php");

    $queryS = "SELECT * FROM codfune";
    $queryE = mysqli_query($conexao, $queryS);
    $Row = mysqli_fetch_array($queryE);
   

     while ($Row = mysqli_fetch_array($queryE)){
         echo "nome: ".$Row['nome']." <br>";
     }
?>