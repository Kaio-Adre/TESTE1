<?php 
    $local = "localhost";
    $usuario = "root";
    $senha = "";
    $bancoDados = "clinicasenac";

    $conn = mysqli_connect($local, $usuario, $senha, $bancoDados);

    if(!$conn){
        die("Conexão Falhou!".mysqli_connect_error());
    } 
?>