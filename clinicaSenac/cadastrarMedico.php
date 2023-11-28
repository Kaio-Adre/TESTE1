<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background-color:azure;
        
        }
    </style>
    

    <title>Cadastro Medico</title>
</head>

<body>
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
        <h1>Cadastro Medico</h1>
    </center>

    <!-- Corpo -->
    <div class="container shadow-lg p-4 mt-5 bg-white">
        
    <form method="POST" action="inserirMed.php">
        <!-- Primeira Linha -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Nome:* </label>
                <input class="form-control" type="text" placeholder="" name="nomeMed">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Endereço:* </label>
                <input class="form-control" type="text" placeholder="" name="endMed">
            </div>
        </div>
        
        <!-- Segunda Linha -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Bairro:* </label>
                <input class="form-control" type="text" placeholder="" name="bairroMed">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Cidade:* </label>
                <input class="form-control" type="text" placeholder="" name="cidadeMed">
            </div>
        </div>
        <!-- Terceira Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> CPF:* </label>
                <input class="form-control" type="text" placeholder="" name="cpfMed">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Valor da Consulta:* </label>
                <input class="form-control" type="text" placeholder="" name="valConMed">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="statusMed"> Status:* </label>
                <select class="form-control" name="statusMed" id="statusMed" require>
                    <option></option>
                    <option value="ativo">ATIVO</option>
                    <option value="inativo">INATIVO</option>
                </select>
            </div>
        </div>  
        <!-- Quarta Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Porcentagem:* </label>
                <input class="form-control" type="text" placeholder="" name="porMed">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> CRM:* </label>
                <input class="form-control" type="text" placeholder="" name="crmMed">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Especialidade:* </label>
                <input class="form-control" type="text" placeholder="" name="espMed">
            </div>
        </div>
        <!-- Botão Salvar/Cancelar -->
        <br>
        <center>
        <div>
            <button type="submit" class="btn btn-success"> Salvar </button>
            <a href="telaPrincipal.php"> <button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
        </center>
    </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>