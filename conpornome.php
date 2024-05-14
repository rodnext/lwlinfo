
<?php
@session_start();
include ('conexao.php');
include ('menus/menu_adm.php');
include ('seguranca.php');

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Consulta Por Nome</title>
  </head>
  <body>
    <div class="container">
        <form>
          <div class="form-group">
          <br>
          <label>Informe o nome</label>
            <input type="type" class="form-control" name="busca">

          </div>
          <input type="submit" value="Buscar">
          </form>

    </div>        

        <?php
            @$busca = $_GET['busca'];
            $sql = "SELECT * FROM tblexibeprod WHERE produto LIKE '%$busca%'";
            $qry = mysqli_query($con,$sql);

            while($resultado = mysqli_fetch_array($qry)){

                $produto = $resultado['produto'];
                $preco = $resultado['preco'];

                echo $produto. " - ".$preco;
                echo "<hr>";
            }
            ?>