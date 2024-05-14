<?php
@session_start();
include ('conexao.php');
include ('menus/menu_colaborador.php');

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Consultar Cliente</title>
  </head>
  <body>
    <div class='container'><br>
        <a href="cadclientecol.php" class="btn btn-sm btn-primary">Cadastrar Novo</a><hr>
        
        <?php
        $sql = "select * from tblcliente";
        $qry = mysqli_query($con,$sql);
        ?>
        <table class='table'>
        <thead class='thead-dark'>
            <th scope='col'>id</th>
            <th scope='col'>Nome</th>
            <th scope='col'>CPF</th>
        </thead>
        <?php
        while ($linha = mysqli_fetch_array($qry)){
            //$cpf = $linha['datareg'];
            ?>
            <tbody>
            <tr>
            <td scope='row'><?php echo $linha['idcliente'] ?> </td>
            <td><?php echo $linha['nome']?></td>
            <td><?php echo $linha['cpf']?></td>
            <!-- <td scope='row'> <?php //echo date("d/m/yy",strtotime($cpf)) ?></td> -->
            </tr>
            </tbody>
        <?php } ?>
            </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>