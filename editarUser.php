<?php
 session_start();
 $idUser = filter_input(INPUT_GET,'User',FILTER_SANITIZE_NUMBER_INT);
 $_SESSION['id'] = $idUser;
 include 'conecta.php';


 $queryS = "SELECT * FROM codfune join tab_cargos on tab_cargos.cod = codfune.dpt where codfun = '$idUser'";
 
$queryP = mysqli_query($conexao,$queryS);
$queryU = mysqli_fetch_array($queryP);


if (isset($_POST['btnEnv'])){
    $nome = $_POST['nome'];
    $departamento = $_POST['dpt'];
    $funcao = $_POST['funcao'];
    $salario = $_POST['salario'];


}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssIndex.css">
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
        <div class="box">
    <?php
        if (isset($_SESSION['alterado'])): ?>
            <p style="color: green ;">Funcionario Alterado com sucesso!<p>
    <?php
        endif;
        unset($_SESSION['alterado']);
        if (isset($_SESSION['notAlter'])): ?>
            <p style="color: red ;">Erro, Não foi possivel alterar as informações do Funcionario!</p>
    <?php
        endif;
        unset($_SESSION['notAlter']);
    ?>
        
    <fieldset>
    <form action="attUser.php" method="POST">
        <LABEl>Nome: </LABEl><input type="text" name="nome" value="<?php echo $queryU['nome']; ?>" class="txts"><br></br>
        <label for="">Cargo Atual:</label><label for=""><?php echo $queryU['cargo'] ?></label><br></br>
        <label for="">Salario Atual:</label><label for=""><?php echo $queryU['salario'] ?></label><br></br>
        <hr>
        <fieldset >
            <legend>Alterar Cargo</legend>
       <select name="cargoAtt" id="">
       <?php
                        include_once "conecta.php";
                        $queryes = "SELECT * FROM tab_cargos;";
                        $queryEx = mysqli_query($conexao, $queryes);
                        while ($func = mysqli_fetch_array($queryEx)):?>
                    
                        <option value="<?php echo $func['cod'] ?>"><?php echo $func['cargo'] ?></option>


                    <?php
                        endwhile;
                    ?>
                    </select>
                    </fieldset>
        <input type="submit" name="btnEnv" value="Alterar">
    </form>
    </fieldset>
    <a href="lista.php">Voltar a Lista</a>
    </div>
    </div>
</body>
</html>