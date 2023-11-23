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
    

    <title>Cadastro Paciente</title>
</head>

<body>
    <center>
        <h1>Cadastrar Paciente</h1>
    </center>

    <div class="container shadow-lg p-4 mt-3 bg-white">
        <form method="POST" action="inserirPac.php">
        <!-- Primeira Linha -->
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Nome:* </label>
                <input class="form-control" type="text" placeholder="" name="nomePac">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <label> Endereço:* </label>
                <input class="form-control" type="text" placeholder="" name="endPac">
            </div>
        </div>
        
        <!-- Segunda Linha -->
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> Bairro:* </label>
                <input class="form-control" type="text" placeholder="" name="bairroPac">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> Cidade:* </label>
                <input class="form-control" type="text" placeholder="" name="cidadePac">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> UF:* </label>
                <input class="form-control" type="text" placeholder="" name="ufPac">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <label> CPF:* </label>
                <input class="form-control" type="text" placeholder="" name="cpfPac">
            </div>
        </div>

        <!-- Terceira Linha -->
        <br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                
                    <label>Sexo:</label>
                    <input type="radio" id="masculino" name="sexo" value="masculino">
                    <label for="masculino"> Masculino</label>
                    <input type="radio" id="feminino" name="sexo" value="feminino">
                    <label for="feminino">Feminino</label>
                
            </div>
        </div>
        <br>
        
        <!-- Quarta Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Data Nascimento:* </label>
                <input class="form-control" type="date" placeholder="" name="nascPac">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Celular:* </label>
                <input class="form-control" type="text" placeholder="" name="celularPac">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Email:* </label>
                <input class="form-control" type="text" placeholder="" name="emailPac">
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