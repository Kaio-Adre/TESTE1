<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: rgba(8, 39, 72, 0.81);
        }

        hr {
            height: 10px;
            color: #d84c4c;
            height: 5px;
            border: 3;
        }

        h3,h6,p {
            color: floralwhite;
        }
    </style>
</head>

<body>

    <div class="container">
            <h3 class="text-center mt-5">1 - Como voce avalia o nosso <b>Atendimento?</b></h3>
        
        <hr>
        
        <div class="row ">
            <div class="col-md-3 col-sm-3">
                
                    <a href="inserirEscolha.php?voto=<?php echo 1 ?>">
                    <img src="img/excelente.png" height="100%" width="100%">
                    </a>
                
                <h6 class="text-center"><b>EXCELENTE</b></h6>
            </div>

            <div class="col-md-3 col-sm-3">
                <a href="inserirEscolha.php?voto=<?php echo 2 ?>">
                <img src="img/bom.png" height="100%" width="100%">
                </a>
                <h6 class="text-center"><b>BOM</b></h6>
            </div>

            <div class="col-md-3 col-sm-3">
                <a href="inserirEscolha.php?voto=<?php echo 3 ?>">
                <img src="img/ruim.png" height="100%" width="100%">
                </a>
                <h6 class="text-center"><b>RUIM</b></h6>
            </div>

            <div class="col-md-3 col-sm-3">
                <a href="inserirEscolha.php?voto=<?php echo 4 ?>">
                <img src="img/pessimo.png" height="100%" width="100%">
                </a>
                <h6 class="text-center"><b>PÉSSIMO</b></h6>
            </div>
        </div>
        <hr class="mt-5">
        <p class="text-center"> Programador Web SENAC - BACABAL/MA</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>