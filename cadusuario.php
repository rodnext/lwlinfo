<?php
@session_start();
include('conexao.php');
include('menus/menu_adm.php');
?>

<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  
  <div class="container">
  <br>
      <h1>Cadastro do Usuario</h1>
    <form action="insusu.php" method="POST">
        
        <div class="row">
          <div class="col">
           <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name='nome'>  
           </div>
              </div>
                  </div>              
         


            <div class="row">
          <div class="col-lg-8">
        <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name='email'>
        </div>
        </div>               
         
 
          
        <div class="col-md-4">
        <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" name='senha'>
       </div>   
          </div>
              </div>

          
          
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">

          <label for="exampleFormControlSelect1">Situação</label>
          <select class="form-control" id="exampleFormControlSelect1" name='idsituacao'>
          
          <?php
              $sql = "select * from tblsituacao";
              $qry = mysqli_query($con,$sql);
              while($linha=mysqli_fetch_array($qry)){
          ?>
              
              <option value="<?php echo $linha['idsituacao']?>"> <?php echo $linha['situacao']?>     
              
              <?php } ?>
  
           </select>
            </div>
            </div>
                  
              <div class="col-md-6"> 
              <div class="form-group">       
          <label for="exampleFormControlSelect1">Nível de acesso</label>
          <select class="form-control" id="exampleFormControlSelect1" name='idnivelacesso'>
          
          <?php
              $sql = "select * from tblniveldeacesso";
              $qry = mysqli_query($con,$sql);
              while($linha=mysqli_fetch_array($qry)){
          ?>
              
              <option value="<?php echo $linha['idnivelacesso']?>"> <?php echo $linha['acesso']?>     
              
              <?php } ?>
              
              
           </select>
            </div>
             </div>
              </div>
                  
          <div class="form-group">
            <label>Data de criação</label>
            <input type="date" class="form-control" name='criado'>
          </div>    

             <div class="form-group">
            <label>Data de modificação</label>
            <input type="date" class="form-control" name='modificado'>
          </div>    
  
  
          <button type="submit" class="btn btn-dark">Cadastrar usuario</button>
  </form>   
  
<?php

include('final.php');
?>
            <?php //echo $_SESSION['voltarCadastro']; ?>
</div>   




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>