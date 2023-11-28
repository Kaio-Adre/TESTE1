<html>

<head>
    <style>
        #body{
            background-color: #1b1f27;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
        }
        
        #container {
            background-color: #181920;
            align-items: center;
        }

        div [type="submit"]{
            display: block;
            background-color: #5568fe;
            font-size: 20px;
            text-transform: uppercase;
            font-weight: bold;
            color: white;
        }

        label {
            color: white;
        }

        div h1 {
            color: white;
        }
        input {
            color: #cbd0f7;
            font-size: 14px;
            background-color: #1b1f27;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body id="body">
<center>
    <?php

    //date_default_timezone_set('America/Sao_Paulo');
    //$data = date('d-m-Y');
    $hoje = date('d/m/Y'); 
    //echo $hoje
    $hora = date('H:i:s');

    ?>

        <form method="POST" action="inserirponto.php">

    <div class="container" id="container">
    <h1>Registrar Ponto</h1>
        <div class="row mt-5">
            <div class=" col-lg-12 col-md-4">
                <label> Data: </label>
                <input type="text" value="<?php echo $hoje; ?>" name="data">
            </div>
        </div>
        <div class="row mt-2">

            <div class="col-lg-12 col-md-4">
                <label>Hora:</label>
                <input type="text" value="<?php echo $hora; ?>" name="hora">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-12 col-md-4">
                <label> Status:</label> </br>

                <label>Entrada:</label> <input type="radio" id="huey" name="status" value="entrada" checked /> </br>

                <label>Saída:</label> <input type="radio" id="huey" name="status" value="saida" checked />
            </div>
        </div>
        <div class="row mt-2">
            
            <div class="col-md-12">
                <input type="submit" value="Registrar">
            </div>
        </div>

    </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </center>
</body>

</html>