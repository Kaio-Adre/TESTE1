<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lista Pacientes</title>
</head>
<body>
    <table class="table table-striped table-sm" style="width:100%">
        <thead style="font-size: 80%;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data Consulta</th>
                <th scope="col"> Retorno</th>
                <th scope="col">Horario</th>
                <th scope="col">Obs</th>
                <th scope="col">Cidade</th>
                <th scope="col">Convenio</th>
                <th scope="col">Medico</th>
                <th scope="col">Paciente</th>
                <th scope="col">Especialidade</th>
                <th scope="col">Confirmação</th>
                <th scope="col">Valor</th>
                <th scope="col">Pagamento</th>
                <th scope="col">Ação</th>
            </tr>
            <tbody>
                <?php 
                    include "..\conexaoBD.php";
                    $sql = "select * from tb_consultas order by idcon desc";

                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                ?>      
                        <tr style="font-size: 70%;">
                            <td><?php echo $row['idcon'];?></td>
                            <td><?php echo $row['data_consulta'];?></td>
                            <td><?php echo $row['retorno'];?></td>
                            <td><?php echo $row['hora'];?></td>
                            <td><?php echo $row['obs'];?></td>
                            <td><?php echo $row['cidade'];?></td>
                            <td><?php echo $row['convenio'];?></td>
                            <td><?php echo $row['fk_idmed'];?></td>
                            <td><?php echo $row['fk_idpac'];?></td>
                            <td><?php echo $row['especialidade'];?></td>
                            <td><?php echo $row['confirmada'];?></td>
                            <td><?php echo $row['valor'];?></td>
                            <td><?php echo $row['pagamento'];?></td>
                            <td><a href="#"> Editar / </a><a href="#"> Excluir</a></td>

                        </tr>
                <?php        
                    }
                ?>
            </tbody>
        </thead>
    </table>

    <div>
        <a href="telaPrincipal.php">
            <input type="button" name="Voltar">
        </a>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>