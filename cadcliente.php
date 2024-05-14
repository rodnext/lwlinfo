<?php
@session_start();
include('menu.php');
include('conexao.php');

?>
    
<html lang="pt-br">
  <head>
  <style type="text/css">
  body { background-image: url(img/body.jpg);}
  .container
  { background-color:  #ffffff; }
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body class="text-center">
  
    <div class="container form-signin">
    <br>
        <h1>Cadastro</h1>

    <hr>

      <form class="form-signin" action="inscliente.php" method="POST">
          

      <div class="form-group">
                <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Nome e Sobrenome" name='nome'>  
             </div>             
    

            <div class="form-group">
              <label>CPF</label>
              <input type="text" class="form-control" placeholder="Ex.: 01234567890" name='cpf'>
            </div> 
               

            <div class="form-group">
              <label>E-mail</label>
              <input type="text" class="form-control" placeholder="exemplo@gmail.com" name='email'>
            </div>    


              <div class="form-group">
              <label>Celular</label>
              <input type="text" class="form-control" maxlength="11" placeholder="(XX)XXXXX-XXXX" name='telefone'>
            </div>     

            <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label>Senha</label>
              <input type="password" class="form-control" placeholder="Senha" name='senha'>
            </div>  
            </div>  
              

            <div class="col-md-6">
            <div class="form-group">
              <label>Confirmar Senha</label>
              <input type="password" class="form-control" placeholder="Senha" name='confsenha'>
            </div>
            </div>  
            </div>  
    
    
            <button type="submit" class="btn btn-primary">Cadastrar cliente</button><br><br>
    </form>  
    
    <?php
  include ('final.php'); ?> 
  </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>