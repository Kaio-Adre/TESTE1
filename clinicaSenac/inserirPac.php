
<?php
    include "..\conexaoBD.php";

    $nome = $_POST['nomePac'];
    $endereco = $_POST['endPac'];
    $bairro = $_POST['bairroPac'];
    $cidade = $_POST['cidadePac'];
    $uf = $_POST['ufPac'];
    $cpf = $_POST['cpfPac'];
    $sexo = $_POST['sexo'];
    $nasc = $_POST['nascPac'];
    $celular = $_POST['celularPac'];
    $email = $_POST['emailPac'];
 
    $sqlinsert = "insert into tb_pacientes(nome, endereco, bairro, cidade, uf, cpf, sexo, data_nasc, celular, email) values ('$nome', '$endereco', '$bairro', '$cidade', '$uf', '$cpf', '$sexo', '$nasc', '$celular', '$email')";
     
    $resultado = mysqli_query($conn, $sqlinsert);

    if($resultado){
        header("location: listaPac.php");
    }else{
        echo "Falha na Página Salvar Paciente". mysqli_errno($conn);
    }

?>