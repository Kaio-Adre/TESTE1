<?php 
    include "../conexaoBD.php";

    $id = $_GET['Codigo'];

    $sql = "delete from tb_medicos where idmed = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: listaMedico.php");
    }
?>