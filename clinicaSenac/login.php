<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .container {
            width: 25vw;
        }

        .btn {
            width: 22vw;
        }
    </style>

    <title>Login</title>
</head>

<body>
    <center>
        <div class="row mt-4">
            <div class="col">
                <h5>Autenticação</h5>
            </div>
        </div>
    </center>
    <form method="" action="telaPrincipal.php">
        <div class="container shadow-lg p-4 mt-3 bg-white rounded wv-20">

            <div class="row mt-4">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <input type="text" class="form-control" placeholder="Seu usuario" name="usuario">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <input type="text" class="form-control" placeholder="Sua senha" name="senha">
                </div>
            </div>
            <div class="form-check mb-4 mt-2">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <input class="form-check-input" type="checkbox" value="" />
                    <label class="form-check-label">lembrar da senha</label>
                </div>
            </div>
            <center>
                <div class="row mt-4">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                        <button type="submit" class="btn btn-primary">Entrar</button>

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <a class="small" href="">Esqueceu sua senha?</a>
                    </div>
                </div>
            </center>
        </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>