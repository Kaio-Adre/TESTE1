
<?php
    include "..\conexaoBD.php";

    $nome = $_POST['nomeMed'];
    $endereco = $_POST['endMed'];
    $bairro = $_POST['bairroMed'];
    $cidade = $_POST['cidadeMed'];
    $cpf = $_POST['cpfMed'];
    $valcon = $_POST['valConMed'];
    $stat = $_POST['statusMed'];
    $por = $_POST['porMed'];
    $crm = $_POST['crmMed'];
    $esp = $_POST['espMed'];
 
    $sqlinsert = "insert into tb_medicos(nome, endereco, bairro, cidade, cpf, valCon, stat, por, crm, especialidade) values ('$nome', '$endereco', '$bairro', '$cidade', '$cpf', '$valcon', '$stat', '$por', '$crm', '$esp')";
     
    $resultado = mysqli_query($conn, $sqlinsert);

    if($resultado){
        header("location: listaMedico.php");
    }else{
        echo "Falha na Página Salvar Paciente". mysqli_errno($conn);
    }

?>