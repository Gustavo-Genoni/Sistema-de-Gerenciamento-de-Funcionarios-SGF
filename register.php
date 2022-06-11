<?php
    session_start();
    $nome = $_POST['nome'];
    $dp = $_POST['dp'];
    include "conecta.php";

    $queryS = "SELECT * from codfune where nome = '$nome';";
    $query = mysqli_query($conexao, $queryS);
    $row = mysqli_num_rows($query);
    if ($row == '1'){
        echo "Erro! Usuario já registrado!";
     } else {
         $query = "insert into codfune (nome,dpt) values ('$nome','$dp');";
         $queryI = mysqli_query($conexao, $query);
         $_SESSION['cadastro'] = TRUE;
         header('Location: index.php');
    }
?>