<?php 

    include "..\conexaoBD.php";

    $sql = "select idpac, nome from tb_pacientes";

    $sqlmedico = "select idmed, nome, especialidade from tb_medicos";

    $result = mysqli_query($conn, $sql);
    $resultmedico = mysqli_query($conn, $sqlmedico);
    
?>






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
    

    <title>Marcar Consulta</title>
</head>

<body>
    <center>
        <h1>Marcar Consulta</h1>
    </center>

    <div class="container shadow-lg p-4 mt-3 bg-white">
        <form method="POST" action="inserirCon.php">
        <!-- Primeira Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Data Consulta:* </label>
                <input class="form-control" type="date" placeholder="" name="dataCon">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Retorno:* </label>
                <input class="form-control" type="date" placeholder="" name="retCon">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Hora:* </label>
                <input class="form-control" type="time" placeholder="" name="horCon">
            </div>
        </div>
        
        <!-- Segunda Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Obs: </label>
                <textarea class="form-control" name="obs"> </textarea>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="cidadeCon"> Cidade:* </label>
                <input class="form-control" type="text" placeholder=""  id="cidadeCon" name="cidadeCon">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="conCon"> Convênio:* </label>
                <select class="form-control" id="conCon" name="conCon" require>
                    <option value="">vor</option>
                    <option value="">tor</option>
                </select>
            </div>
        </div>
        
        <!-- terceira Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="medCon"> Médico:* </label>
                <select class="form-control" id="medCon" name="medCon" require>
                    <option value="">Selecione...</option>
                    <?php
                        while($dadosmed = mysqli_fetch_assoc($resultmedico)){
                    ?>        
                    <option value="<?php echo $dadosmed['idmed'] ?>">
                       <?php echo $dadosmed['nome']  ?>
                    </option>
                    <?php }?>
                </select>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="pacCon"> Paciente:* </label>
                <select class="form-control" id="pacCon" name="pacCon" require>
                    <option value=""> Selecione...</option>
                    <?php
                        while($dados = mysqli_fetch_assoc($result)){
                    ?>        
                    <option value="<?php echo $dados['idpac'] ?>">
                       <?php echo $dados['nome']  ?>
                    </option>
                    <?php }?>
                </select>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="espCon"> Especialidade:* </label>
                <select class="form-control" id="espCon" name="espCon" require>
                    <option value="">Selecione...</option>
                    <?php
                        while($dadosmedesp = mysqli_fetch_assoc($resultmedico)){
                    ?>        
                    <option value="<?php echo $dadosmedesp['idmed'] ?>">
                       <?php echo $dadosmedesp['especialidade']  ?>
                    </option>
                    <?php }?>
                </select>
            </div>
        </div>

        <!-- Quarta Linha -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="statusCon"> Confirmada:* </label>
                <select class="form-control" id="statusCon" name="statusCon" require>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label> Valor:* </label>
                <input class="form-control" type="text" placeholder="" name="valorCon">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <label for="pagCon"> Pagamento:* </label>
                <select class="form-control" id="pagCon" name="pagCon" require>
                    <option value="dinheiro"> Dinheiro</option>
                    <option value="cartao"> Cartão </option>
                </select>
            </div>
        </div>
        <!-- Botão Agendar/Cancelar -->
        <br>
        <center>
        <div>
            <button type="submit" class="btn btn-success"> Agendar </button>
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