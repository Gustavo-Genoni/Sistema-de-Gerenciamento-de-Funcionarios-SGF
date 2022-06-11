<?php
    session_start();
    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $dpt = $_POST['cargoAtt'];
    include "conecta.php";
    $queryS = "UPDATE codfune SET nome='$nome', dpt=$dpt WHERE codfun = $id;";
    $queryR = mysqli_query($conexao, $queryS);
    $queryV = mysqli_affected_rows($conexao);
    if ($queryV == 1){
        $_SESSION['alterado'] = TRUE;
        header("Location: editarUser.php?User=".$id);
    } else{
        $_SESSION['notAlter'] = TRUE;
        header('Location: editarUser.php');
    }
    ?>