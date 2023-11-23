<?php 
include "../conexao_BD.php";

$txtdata = $_POST['data'];
$txthora = $_POST['hora'];
$txtstatus = $_POST['status_'];

$sql = "insert into tb_pontosenac(data_, hora, status_)
value ('$txtdata','$txthora','$txtstatus')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: tabelaDedados.php");
} else {
   echo "Falaha na Página " . mysqli_errno($conn);
}
?>