<?php
    include "..\conexaoBD.php";

    $dataCon = $_POST['dataCon'];
    $retorno = $_POST['retcon'];
    $horario = $_POST['horCon'];
    $obs = $_POST['obs'];
    $cidade = $_POST['cidadeCon'];
    $convenio = $_POST['conCon'];
    $medico = $_POST['medCon'];
    $paciente = $_POST['pacCon'];
    $esp = $_POST['espCon'];
    $confirmada = $_POST['statusCon'];
    $valor = $_POST['valorCon'];
    $pagamento = $_POST['pagCon'];
 
    $sqlinsert = "insert into tb_consultas(fk_idmed, fk_idpac, data_consulta, retorno, hora, obs, cidade, convenio, especialidade, confirmada, valor, pagamento) values ('$medico','$paciente','$dataCon', '$retorno', '$horario', '$obs', '$cidade', '$convenio', '$esp', '$confirmada', '$valor', '$pagamento')";
     
    $resultado = mysqli_query($conn, $sqlinsert);

    if($resultado){
        header("location: listaCon.php");
    }else{
        echo "Falha na Página Salvar Paciente". mysqli_errno($conn);
    }

?>