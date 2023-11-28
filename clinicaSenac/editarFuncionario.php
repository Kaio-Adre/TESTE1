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
    $txtcelular = $_POST['celular'];
    $txtemail = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
  
    $sql = "UPDATE tb_funcionarios set nome = '$txtnome' , endereco = '$txtendereco', bairro = '$txtbairro', cidade = '$txtcidade', uf = '$txtuf', cpf = '$txtCPF', sexo = '$txtsexo', data_nasc = '$data_nasc', celular = '$txtcelular', email = '$txtemail', login = '$login', senha = '$senha'  where idfun = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: listaFunc.php");
    } else {
        echo "Falha Página Funcionario: " . mysqli_errno($conn);
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
    

    <title>Atualizar Cadastro do Funcionario</title>
</head>

<body>


    <?php
    $sql = "SELECT * FROM tb_funcionarios where idfun = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    ?>
    <form method="POST" method="editar.php">
    <center>
        <h1>Atualizar Cadastro do Funcionario</h1>
    </center>

    <div class="container shadow-lg p-4 mt-3 bg-white">
        
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
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> Bairro:* </label>
                <input type="text" class="form-control" name="bairro" value="<?php echo $row['bairro']; ?>"> </br>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> Cidade:* </label>
                <input type="text" class="form-control" name="cidade" value="<?php echo $row['cidade']; ?>"> </br>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> UF:* </label>
                <input type="text" class="form-control" name="uf" value="<?php echo $row['uf']; ?>"> </br>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> CPF:* </label>
                <input type="text" class="form-control" name="cpf" value="<?php echo $row['cpf']; ?>"> </br>
            </div>
        </div>

        <!-- Terceira Linha -->
        <br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                
                    <label>Sexo:</label><br>
                    <input type="text" class="form-control" name="sexo" value="<?php echo $row['sexo']; ?>"> </br>
            </div>
        </div>
        <br>
        
        <!-- Quarta Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Data Nascimento:* </label>
                <input type="text" class="form-control" name="data_nasc" value="<?php echo $row['data_nasc']; ?>"> </br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Celular:* </label>
                <input type="text" class="form-control" name="celular" value="<?php echo $row['celular']; ?>"> </br>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Email:* </label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>"> </br>
            </div>
        </div>

        <!-- Quinta Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Login:* </label>
                <input class="form-control" type="text" placeholder="" name="loginFun">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> senha:* </label>
                <input class="form-control" type="text" placeholder="" name="senhaFun">
            </div>
        </div>
        <!-- Botão Salvar/Cancelar -->
        <br>
        <center>
        <div>
        <button type="submit" class="btn btn-success btn-sm" name="submit">
            Atualizar
        </button>
            <a href="listFunc.php"> </a>
        </div>
        </center>
        
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </form>

</body>

</html>