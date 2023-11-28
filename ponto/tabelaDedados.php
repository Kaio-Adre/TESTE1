<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <table id="example" class="table table-striped table-sm" style="width:100%">
        <thead style="font-size:80%;">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Status</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "../conexao_BD.php";

            $sql = "select * from tb_pontosenac ORDER BY id DESC";

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr style="font-size:70%;">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['data_']; ?></td>
                    <td><?php echo $row['hora']; ?></td>
                    <td><?php echo $row['status_']; ?></td>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>