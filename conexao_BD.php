<?php
/*
$local = "srv1124.hstgr.io";
$usuario = "u484271134_senac";
$senha = "Is@el1988";
$bancoDados = "u484271134_senac";
*/
$local = "localhost";
$usuario = "root";
$senha = "";
$bancoDados = "ponto_eletronico";

$conn = mysqli_connect($local, $usuario, $senha, $bancoDados);

if (!$conn) {
    die("Conexao Falhol" . mysqli_connect_error());
}
?>