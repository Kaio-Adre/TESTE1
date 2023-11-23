<?php
include "../conexaoBD.php";

$id = $_GET['Codigo'];

if (isset($_POST['submit'])) {
    $txtnome = $_POST['nome'];
    $txtendereco = $_POST['endereco'];
    $txtbairro = $_POST['bairro'];
    $txtcidade = $_POST['cidade'];
    $txtcpf = $_POST['cpf'];
    $txtval = $_POST['valCon'];
    $txtstat = $_POST['stat'];
    $por = $_POST['por'];
    $txtcrm = $_POST['crm'];
    $txtesp = $_POST['especialidade'];
    
  
    $sql = "UPDATE tb_medicos set nome = '$txtnome' , endereco = '$txtendereco', bairro = '$txtbairro', cidade = '$txtcidade', cpf = '$txtcpf', valCon = '$txtval', stat = '$txtstat', por = '$por', crm = '$txtcrm', especialidade = '$txtesp' where idmed = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: listaMedico.php");
    } else {
        echo "Falha Página Medico: " . mysqli_errno($conn);
    }
}

?>

<html>

<head></head>

<body>


    <?php
    $sql = "SELECT * FROM tb_medicos where idmed = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    ?>
    <form method="POST" method="editarMedico.php">
        <label class="form-label">Nome: </label>
        <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>"> </br>
        <input type="text" class="form-control" name="endereco" value="<?php echo $row['endereco']; ?>"> </br>
        <input type="text" class="form-control" name="bairro" value="<?php echo $row['bairro']; ?>"> </br>
        <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade']; ?>"> </br>
        <input type="text" class="form-control" name="cpf" value="<?php echo $row['cpf']; ?>"> </br>
        <input type="text" class="form-control" name="valCon" value="<?php echo $row['valCon']; ?>"> </br>
        <input type="text" class="form-control" name="stat" value="<?php echo $row['stat']; ?>"> </br>
        <input type="text" class="form-control" name="por" value="<?php echo $row['por']; ?>"> </br>
        <input type="text" class="form-control" name="crm" value="<?php echo $row['crm']; ?>"> </br>
        <input type="text" class="form-control" name="especialidade" value="<?php echo $row['especialidade']; ?>"> </br>
        

        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>

    </form>

</body>

</html>