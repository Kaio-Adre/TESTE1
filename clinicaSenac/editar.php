<?php
include "../conexaoBD.php";

$id = $_GET['Codigo'];

if (isset($_POST['submit'])) {
    $txtnome = $_POST['nome'];
    $txtendereco = $_POST['endereco'];
    $txtbairro = $_POST['bairro'];
    $txtcidade = $_POST['cidade'];
    $txtuf = $_POST['uf'];
    $txtCPF = $_POST['cpf'];
    $txtsexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $txtemail = $_POST['email'];
    $txtcelular = $_POST['celular'];
    
  
    $sql = "UPDATE tb_pacientes set nome = '$txtnome' , endereco = '$txtendereco', bairro = '$txtbairro', cidade = '$txtcidade', uf = '$txtuf', cpf = '$txtCPF', sexo = '$txtsexo', data_nasc = '$data_nasc', email = '$txtemail', celular = '$txtcelular' where idpac = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: listaPac.php");
    } else {
        echo "Falha Página Paciente: " . mysqli_errno($conn);
    }
}

?>

<html>

<head></head>

<body>


    <?php
    $sql = "SELECT * FROM tb_pacientes where idpac = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    ?>
    <form method="POST" method="editar.php">
        <label class="form-label">Nome: </label>
        <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>"> </br>
        <input type="text" class="form-control" name="endereco" value="<?php echo $row['endereco']; ?>"> </br>
        <input type="text" class="form-control" name="bairro" value="<?php echo $row['bairro']; ?>"> </br>
        <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade']; ?>"> </br>
        <input type="text" class="form-control" name="uf" value="<?php echo $row['uf']; ?>"> </br>
        <input type="text" class="form-control" name="cpf" value="<?php echo $row['cpf']; ?>"> </br>
        <input type="text" class="form-control" name="sexo" value="<?php echo $row['sexo']; ?>"> </br>
        <input type="text" class="form-control" name="data_nasc" value="<?php echo $row['data_nasc']; ?>"> </br>
        <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>"> </br>
        <input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>"> </br>
        

        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>

    </form>

</body>

</html>