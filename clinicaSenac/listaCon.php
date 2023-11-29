<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <style>
        div.dataTables_wrapper {
            width: 1500px;
            margin: 0 auto;
        }
    </style>
    <title>Lista Pacientes</title>
</head>

<body>
    <table id="example" class="display nowrap" style="width:100%">
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
            $sql = "select idcon, data_consulta, retorno, hora, tb_medicos.nome AS Medico, tb_pacientes.nome as Paciente, tb_medicos.especialidade as especialidade, obs, tb_consultas.cidade, convenio, confirmada, valor, pagamento FROM tb_consultas, tb_medicos, tb_pacientes WHERE (tb_consultas.fk_idmed = tb_medicos.idmed) AND (tb_consultas.fk_idpac = tb_pacientes.idpac)";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr style="font-size: 70%;">
                    <td><?php echo $row['idcon']; ?></td>
                    <td><?php echo $row['data_consulta']; ?></td>
                    <td><?php echo $row['retorno']; ?></td>
                    <td><?php echo $row['hora']; ?></td>
                    <td><?php echo $row['Medico']; ?></td>
                    <td><?php echo $row['Paciente']; ?></td>
                    <td><?php echo $row['especialidade']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                    <td><?php echo $row['cidade']; ?></td>
                    <td><?php echo $row['convenio']; ?></td>                    
                    <td><?php echo $row['confirmada']; ?></td>
                    <td><?php echo $row['valor']; ?></td>
                    <td><?php echo $row['pagamento']; ?></td>
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

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        new DataTable('#example', {
            scrollX: true
        });
    </script>
</body>

</html>