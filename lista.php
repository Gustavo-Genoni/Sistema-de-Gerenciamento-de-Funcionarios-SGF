<?php
    session_start();
    include_once "conecta.php";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssIndex.css">
    <title>Lista de Funcionarios</title>
</head>
<body>
    
        

        <?php

        if (isset($_SESSION['deletadoS'])): ?>
        <h3 style="color: green; text-align: center;">Ususario deletado!</h3>
        <?php
        endif;

        if (isset($_SESSION['deletaNop'])): ?>
            <h3 style="color: red; text-align: center;">Não foi possivel deletar o Funcionario!</h3>

        <?php
        endif;
        unset ($_SESSION['deletaNop']);

        unset($_SESSION['deletadoS']);
                $query = "SELECT * FROM codfune JOIN tab_cargos on tab_cargos.cod = codfune.dpt ORDER BY codfun; ";
                $queryP = mysqli_query($conexao, $query); ?>


    <div class="container1">
    <fieldset>
    <a href="index.php" class="fixed" style="position:fixed ; left: 70%; top: 95%;" class="btnR">Registrar</a>
    <br></br>
                <?php
                while ( $infoUser = mysqli_fetch_array($queryP)):?>
                    <div class="box">
                <?php
                    echo "<br></br>";
                    echo "Código do Funcionario: ".$infoUser['codfun']. "<br>";
                    echo "Nome: " . $infoUser['nome']. "<br>";
                    echo "Departamento: " . $infoUser['cargo']. "<br>";
                    echo "Salario: ". $infoUser['salario']. "<br></br>";
                    echo "<a href='editarUser.php?User=" . $infoUser['codfun'] . "' class='btnAlter'>Editar</a> <br></br>";
                    echo "<a href='deletarUser.php?User=" .$infoUser['codfun']. "' class='btnDel'>Deletar </a>";
                    echo "<br></br>";
                    
                ?>
                    </div>
                    <hr>
                <?php
                endwhile
        ?>
        
        
    </fieldset>
    </div>
</body>
</html>