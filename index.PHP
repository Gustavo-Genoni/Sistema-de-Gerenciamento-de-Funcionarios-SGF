<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssIndex.css"/>
    <title>Registrar-se</title>
    
</head>
<body>
    <h2>Registrar usuario na empresa G-technology</h2>
    <div class="container">
        
        <fieldset>
            <?php
            if (isset($_SESSION['cadastro'])):?>
            <p style="color: green ;">Funcionario cadastrado com sucesso!</p><br>
            <?php
            endif;
            unset($_SESSION['cadastro']);
            

if(isset($_SESSION['adicionadoCarg'])): ?>

<h3 style="color: green ;">Cargo adicionado!</h3>
<?php
endif;
unset($_SESSION['adicionadoCarg']);
if(isset($_SESSION['adicionadoCarg'])):?>

<h3 style="color: red ;">Erro em adicionar cargo!</h3>

<?php
endif;
unset($_SESSION['adicionarCargE']);
?>

            <legend>Registrar Funcionario</legend>

                <form action="register.php" method="post">
        
                    <div class="box">
                        <br></br>
                        <label for="">Nome: </label><input type="text" name="nome" class="txts" required><br></br>
                        <br>
                        


                        <label for="">Cargo:</label><select name="dp" id="">

                        <?php
                        include_once "conecta.php";
                        $queryes = "SELECT * FROM tab_cargos ORDER BY cargo;";
                        $queryEx = mysqli_query($conexao, $queryes);
                        while ($func = mysqli_fetch_array($queryEx)):
                        ?>

                        <option value="<?php echo $func['cod'] ?>"><?php echo $func['cargo'] ?></option>
                        

                        <?php
                        endwhile;
                        ?>
                        </select> <br>
                        <br></br>
                        <input type="submit">
                        <br></br>
                        <br></br>
                        <a href="lista.php">Lista De Funcionarios</a> <br></br>
                        <a href="pdf.php">Lista de Funcionarios em PDFs</a>
                    </div>

                </form>
                
        </fieldset>
    </div>
    <a href="NewFunc.php" class="fixed" style="position:fixed ; left: 70%; top: 95%;" class="btnR">Adicionar um novo Cargo</a>
            

</body>
</html>