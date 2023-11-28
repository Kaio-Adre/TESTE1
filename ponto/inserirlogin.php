<?php
include '../pontoSenac/ponto/conexao_BD.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];


$query = "selecet id, nome, senha from tb_login where nome= '{$nome}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {

    header('Location: telaPrincipal.php');
    exit();
} else {
    header('Location: login.php');
    exit();
}
