<?php 
    include "../conexaoBD.php";

    $id = $_GET['Codigo'];

    $sql = "delete from tb_pacientes where idpac = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: listaPac.php");
    }
?>