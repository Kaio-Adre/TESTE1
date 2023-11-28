<?php 
    include "../conexaoBD.php";

    $id = $_GET['Codigo'];

    $sql = "delete from tb_funcionarios where idfun = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: listaFunc.php");
    }
?>