<?php 
    include "..\conexaoBD.php";

    $voto = $_REQUEST['voto'];
    $datavoto = date('Y/m/d');

    switch($voto){
        case 1:
            $sqlinsert = "insert into tb_nivelsatisfacao(excelente, dataServico) values ('$voto', '$datavoto')";
            header("location: segundaPergunta.php");
            break;
        case 2:
            $sqlinsert = "insert into tb_nivelsatisfacao(bom, dataServico) values ('$voto', '$datavoto')";
            header("location: segundaPergunta.php");
            break;
        case 3:
            $sqlinsert = "insert into tb_nivelsatisfacao(ruim, dataServico) values ('$voto', '$datavoto')";
            header("location: segundaPergunta.php");
            break;
        case 4:
            $sqlinsert = "insert into tb_nivelsatisfacao(pessimo, dataServico) values ('$voto', '$datavoto')";
            header("location: segundaPergunta.php");
            break;
        case 5:
            $sqlinsert = "insert into tb_nivelsatisfacao(excelente, dataServico) values ('$voto', '$datavoto')";
            header("location: terceiraPergunta.php");
            break;
        case 6:
            $sqlinsert = "insert into tb_nivelsatisfacao(bom, dataServico) values ('$voto', '$datavoto')";
            header("location: terceiraPergunta.php");
            break;
        case 7:
            $sqlinsert = "insert into tb_nivelsatisfacao(ruim, dataServico) values ('$voto', '$datavoto')";
            header("location: terceiraPergunta.php");
            break;
        case 8:
            $sqlinsert = "insert into tb_nivelsatisfacao(pessimo, dataServico) values ('$voto', '$datavoto')";
            header("location: terceiraPergunta.php");
            break;
        case 9:
            $sqlinsert = "insert into tb_nivelsatisfacao(sim, dataServico) values ('$voto', '$datavoto')";
            header("location: obrigado.php");
            break;
        case 10:
            $sqlinsert = "insert into tb_nivelsatisfacao(nao, dataServico) values ('$voto', '$datavoto')";
            header("location: obrigado.php");
            break;        
    }

    $resultado = mysqli_query($conn, $sqlinsert);

    /*if($resultado){
        header("location: segundaPergunta.php");
    }else{
        echo "Falha na Página Salvar Paciente". mysqli_errno($conn);
    }*/

?>