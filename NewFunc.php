<?php
    if(isset($_POST['btnAdd'])){
        session_start();
        $nomeC = $_POST['nameCarg'];
        $salario = $_POST['salCarg'];

        include_once "conecta.php";
        $queryS = "INSERT INTO tab_cargos (cargo,salario) VALUE ('$nomeC',$salario);";
        $queryE = mysqli_query($conexao,$queryS);
        $row = mysqli_affected_rows($conexao);
        if ($row == 1){
            $_SESSION['adicionadoCarg'] = TRUE;
            header('Location: index.php');
        }else{
            $_SESSION['adicionarCargE'] = TRUE;
            header('Location: index.php');
        }

    }?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssindex.css">
    <title>Novo Cargo</title>
</head>
<body>
    <form action="NewFunc.php" method="POST">
    <h3>ADICIONAR UM NOVO CARGO A EMPRESA </h3>
        <div class="container">
            <div class="box">
                <fieldset>
                    <legend>Novo Cargo</legend><br>
                    <label for="">Cargo: </label><input type="text" name="nameCarg" id="nameCargid"><br></br>
                    <label for="">Salario: </label><input type="number" name="salCarg" id="salcargId"><br></br>
                    <br></br>
                    <input type="submit" name="btnAdd" id="btnAddId" value="Adicionar">
                </fieldset>
            </div>
        </div>
    </form>
    <a href="index.php" class="fixed" style="position:fixed ; left: 70%; top: 95%;" class="btnR">Voltar</a>
 
</body>
</html>