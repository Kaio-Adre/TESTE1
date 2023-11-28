<?php 
    include "../conexaoBD.php";

    $sql1 = "select count(*) from tb_nivelsatisfacao
    where (excelente = 1) or (bom = 2) or (ruim = 3) or (pessimo = 4)";

    $sql2 = "select count(excelente) from tb_nivelsatisfacao 
    where excelente = 1";


    $resultado = mysqli_query($conn, $sql1);

    $resultado1 = mysqli_query($conn, $sql2);




    echo $resultado;

?>