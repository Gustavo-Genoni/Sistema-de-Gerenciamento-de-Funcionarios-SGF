<?php
 session_start();
require_once "conecta.php";
$IdUser = filter_input(INPUT_GET,'User',);



//query das informações do ususario

$queryS = "SELECT * FROM codfune join tab_cargos on tab_cargos.cod = codfune.dpt where codfun = '$IdUser'";
$queryE = mysqli_query($conexao, $queryS);
$resltQ = mysqli_fetch_array($queryE);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssIndex.css">
    <title>Deleter Funcionario</title>
</head>
<body>
    <div class="container">
        <div class="box">
        <fieldset>
            <legend>Informações do Funcionario</legend>
            <br></br>
        <form action="deleteUserConfig.php" method="POST">
            <label for="">Nome do funcionario: <?php echo $resltQ['nome'] ?></label><br></br>
            <label for="">Departamento: <?php echo $resltQ['cargo'] ?></label><br></br>
            <label for="">Salario: <?php echo $resltQ['salario'] ?></label><br></br></br>
            <input type="submit" name="del" value="Deletar"><br></br>
            <input type="hidden" name="idUser" value="<?php echo $IdUser?>">
        </form>
        </fieldset>
        </div>
    </div>
</body>
</html>
