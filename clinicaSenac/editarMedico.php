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

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background-color:azure;
        
        }
    </style>
    <title>Atualizar cadastro medico</title>
</head>

<body>


    <?php
    $sql = "SELECT * FROM tb_medicos where idmed = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    ?>
    <form method="POST" method="editarMedico.php">
       <div class="container shadow-lg p-3 mt-1 bg-white">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="telaPrincipal.php"> Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"> / Cadastro Médico</a>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <center>
        <h1>Atualizar Cadastro Medico</h1>
    </center>

    <!-- Corpo -->
    <div class="container shadow-lg p-4 mt-5 bg-white">
        
    
        <!-- Primeira Linha -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Nome:* </label>
                <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>"> </br>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Endereço:* </label>
                <input type="text" class="form-control" name="endereco" value="<?php echo $row['endereco']; ?>"> </br>
            </div>
        </div>
        
        <!-- Segunda Linha -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Bairro:* </label>
                <input type="text" class="form-control" name="bairro" value="<?php echo $row['bairro']; ?>"> </br>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Cidade:* </label>
                <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade']; ?>"> </br>
            </div>
        </div>
        <!-- Terceira Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> CPF:* </label>
                <input type="text" class="form-control" name="cpf" value="<?php echo $row['cpf']; ?>"> </br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Valor da Consulta:* </label>
                <input type="text" class="form-control" name="valCon" value="<?php echo $row['valCon']; ?>"> </br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="statusMed"> Status:* </label>
                <input type="text" class="form-control" name="stat" value="<?php echo $row['stat']; ?>"> </br>
            </div>
        </div>  
        <!-- Quarta Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Porcentagem:* </label>
                <input type="text" class="form-control" name="por" value="<?php echo $row['por']; ?>"> </br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> CRM:* </label>
                <input type="text" class="form-control" name="crm" value="<?php echo $row['crm']; ?>"> </br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Especialidade:* </label>
                <input type="text" class="form-control" name="especialidade" value="<?php echo $row['especialidade']; ?>"> </br>
            </div>
        </div>
        <!-- botão  Atualizar -->
        <br>
        <center>
        <div>
        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>
        </div>
        </center>
    
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       

    </form>

</body>

</html>