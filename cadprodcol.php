<?php
@session_start();
include('menus/menu_colaborador.php');
include('conexao.php');
include('seguranca.php');
seguranca_adm();
?>
   
    
  <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   
   <style type="text/css">
  body { background-image: url(img/body.jpg); }
  .container
  { background-color:  #F0F8FF; }
  
  </style>


    <title>..:: Cadastro ::..</title>
  </head>
  
  <body>
  <center>
    <div class="container">
    
    <br>
    <br>
    <br>
        <h1>Cadastro De Produtos</h1>

    <hr>

      <form action="salvarprod.php" method="POST">
          
              
                <div class="col-md-4">
              <div class="form-group">
                <label>Produto</label>
                    <input type="text" class="form-control" name='produto'>  
             </div>
             </div>               
                         
    

            <div class="col-md-4">
            <div class="form-group">
              <label>Foto Produto</label>
              <input type="file" class="form-control" name='foto'>
            </div> 
            </div> 
           
               
            <div class="col-md-2">
            <div class="form-group">
              <label>Preço</label>
              <input type="text" class="form-control" name='preco'>
            </div>    
            </div>    

         
        <div class="col-md-4"> 
        <div class="form-group">
         <label>Descrição</label>
         <br>
         <textarea type="text" class="form-control" id="idproduto" name="produto" placeholder="Escreva sobre o produto"></textarea>
         </div>
         </div>
         <button type="submit" class="btn btn-success">Cadastrar Produto</button>
           
    </form>  
    <br> 
</div>

</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
