<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login ponto</title>
    <style>
        body {
            background-color: #1b1f27;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
        }

        .area-login{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .login{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #181920;
            width: 355px;
            height: 320;
            padding: 35px;
        }

        .login form{
            display: flex;
            width: 100%;
            flex-direction: column;
        }
        .login input {
            margin-top: 10px;
            background-color: #252a34;
            padding-left: 10px;
            color: #cbd0f7;
            border: none;
            height: 45px;
            outline: none;
            border-radius: 8px;
        }
        .input::placeholder {
            color: #cbd0f7;
            font-size: 14px;
        }
        form [type="submit"]{
            display: block;
            background-color: #5568fe;
            font-size: 20px;
            text-transform: uppercase;
            font-weight: bold;

        }
        h1{
            color: #cbd0f7;
        }
       
    </style>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <h1>Ponto Eletrônico</h1>
            <div>
                <img src="">
        
            </div>
            <form method="POST" action="registrarponto.php">
                <input type="text" name="nome" placeholder="Nome de Usuario">
                <input type="password" name="senha" placeholder="Sua Senha">
                <input type="submit" value="Entrar">
            </form>
        </div>
    </section>
</body>
</html>