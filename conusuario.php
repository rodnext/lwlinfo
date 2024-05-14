<?php
@session_start();
include ('conexao.php');
include ('menus/menu_adm.php');

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <title>Consulta De Usuarios</title>
  </head>
  <body>
    
  <div class='container'><hr>
  <a href="cadusuario.php" class="btn btn-sm btn-primary">Cadastrar Novo</a><hr>
            <?php
            $sql = "SELECT * from tblusuarios";
            $qry = mysqli_query($con,$sql);
            ?>
            <br>
            <table class='table'>
            <thead>
            <thead class='thead-dark'>
            <th scope='col'>Id</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Email</th>
            <th scope='col'>Senha</th>
            <th scope='col'>ID Situação</th>
            <th scope='col'>Nivel</th>
            <th scope='col'>Criado</th>
            <th scope='col'>Modificado</th>
            <th scope='col'>Operações</th>
        
        
            </thead>
          <?php
              while($linha = mysqli_fetch_array($qry)){ 
          ?>
                  <tbody>
                 <tr>
                    <td scope='row'><?php echo $linha['idusuario'] ?> </td>
                    <td>            <?php echo $linha['nome'] ?></td>
                    <td>            <?php echo $linha['email'] ?></td>
                    <td>            <?php echo $linha['senha'] ?></td>
                    <td>            <?php echo $linha['idsituacao'] ?></td>
                    <td>            <?php echo $linha['idnivelacesso'] ?></td>
                    <td>            <?php echo $linha['criado'] ?></td>
                    <td>            <?php echo $linha['modificado'] ?></td>
                  
                   <td>            

          <a href="edtusuario.php?idusuario=<?php echo $linha['idusuario'] ?>"><img src="img/editar.png" width="25" height="25"></a>
          <a href="dltusuario.php?idusuario=<?php echo $linha['idusuario'] ?>"><img src="img/excluir.png" width="25" height="25"></a>
                  </td>
                  </tr>
                  </tbody>        
          <?php }  ?>
            </table>
        
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>