<?php
    require_once __DIR__ . '/vendor/autoload.php';

    use Mpdf\Mpdf;

    $mpdf = new Mpdf();
    
    // parte da lista
    include_once("conexao.php");

    $queryS = "SELECT * FROM codfune join tab_cargos on tab_cargos.cod = codfune.dpt ORDER BY codfun";
    $queryE = mysqli_query($conexao, $queryS);
   


     while ($Row = mysqli_fetch_array($queryE)){
         $html = "<br> Código do Funcionario: ".$Row['codfun']." <br> Nome: ".$Row['nome']." <br> Função: ".$Row['cargo']."<br> Salario: ".$Row['salario']."<br></br> <hr>";

         $mpdf->WriteHTML($html);
     }


    $mpdf->Output();
?>