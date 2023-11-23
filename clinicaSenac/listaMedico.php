<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lista Médicos</title>
</head>
<body>
    <form method="get" action="excluirMed.php">
    <table class="table table-striped table-sm" style="width:100%">
        <thead style="font-size: 80%;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col"> Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">CPF</th>
                <th scope="col">Valor Consulta</th>
                <th scope="col">Status</th>
                <th scope="col">Porcentagem</th>
                <th scope="col">CRM</th>
                <th scope="col">Especialidade</th>
                <th scope="col">Ação</th>
            </tr>
            <tbody>
                <?php 
                    include "..\conexaoBD.php";
                    $sql = "select * from tb_medicos order by idmed desc";

                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                ?>      
                        <tr style="font-size: 70%;">
                            <td><?php echo $row['idmed'];?></td>
                            <td><?php echo $row['nome'];?></td>
                            <td><?php echo $row['endereco'];?></td>
                            <td><?php echo $row['bairro'];?></td>
                            <td><?php echo $row['cidade'];?></td>
                            <td><?php echo $row['cpf'];?></td>
                            <td><?php echo $row['valCon'];?></td>
                            <td><?php echo $row['stat'];?></td>
                            <td><?php echo $row['por'];?></td>
                            <td><?php echo $row['crm'];?></td>
                            <td><?php echo $row['especialidade'];?></td>
                            <td>
                                <a href="editarMedico.php?Codigo=<?php echo $row['idmed'] ?>"> Editar / </a>
                                <a href="excluirMed.php?Codigo=<?php echo $row['idmed'] ?>" onclick="return confirm('Tem certeza que deseja deletar este registro?')"> Excluir</a>
                            </td>

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
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>