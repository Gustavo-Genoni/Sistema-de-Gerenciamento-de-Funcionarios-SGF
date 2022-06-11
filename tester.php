<?php
    include_once "conecta.php";

    $queryS = "SELECT * FROM codfune join tab_cargos on tab_cargos.cod = codfune.dpt where codfun = 3";
    $queryE = mysqli_query($conexao, $queryS);
    $resltQ = mysqli_fetch_array($queryE);

    echo  $resltQ['nome']."<br>";
    echo  $resltQ['cargo']."<br>";
    echo  $resltQ['salario']."<br>";
?>