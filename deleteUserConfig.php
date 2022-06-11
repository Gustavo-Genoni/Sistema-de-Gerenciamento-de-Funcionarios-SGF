<?php 
    session_start();
    include "conecta.php";
if (isset($_POST['del'])){
        $IdUser = $_POST['idUser'];
        $querySD = "DELETE FROM codfune WHERE codfun =$IdUser;";
        $queryED = mysqli_query($conexao,$querySD);
        $verifi = mysqli_affected_rows($conexao);
        if ($verifi == 1){
            $_SESSION['deletadoS'] = TRUE;
            header('Location: lista.php');
        } else{
            $_SESSION['deletadoNop'] = TRUE;
            header('Location: lista.php');
        }
    } else{
        header('Location: lista.php');
    }

?>