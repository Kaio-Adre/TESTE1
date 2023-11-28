
<?php
    include "..\conexaoBD.php";

    $nome = $_POST['nomeFun'];
    $endereco = $_POST['endFun'];
    $bairro = $_POST['bairroFun'];
    $cidade = $_POST['cidadeFun'];
    $uf = $_POST['ufFun'];
    $cpf = $_POST['cpfFun'];
    $sexo = $_POST['sexoFun'];
    $nasc = $_POST['nascFun'];
    $celular = $_POST['celularFun'];
    $email = $_POST['emailFun'];
    $login = $_POST['loginFun'];
    $senha = $_POST['senhaFun'];
 
    $sqlinsert = "insert into tb_funcionarios(nome, endereco, bairro, cidade, uf, cpf, sexo, data_nasc, celular, email, login, senha) values ('$nome', '$endereco', '$bairro', '$cidade', '$uf', '$cpf', '$sexo', '$nasc', '$celular', '$email', '$login', '$senha')";
     
    $resultado = mysqli_query($conn, $sqlinsert);

    if($resultado){
        header("location: listaFunc.php");
    }else{
        echo "Falha na Página Salvar Paciente". mysqli_errno($conn);
    }

?>