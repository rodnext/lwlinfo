<?php

include ('conexao.php');

if ($_SESSION['usuarioNivelAcessoId']=="2") {

?>
<!doctype html> <!-- Menu.php -->
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>..:: LUCAS ::..</title>
  </head>
  <body>
   
   <div class="container">
 <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
 <img src="img/lwl1.png" alt="text" width="70px" height="50px" class="mr-sm-4">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">

<li class="nav-item  active">
        <a class="nav-link" href="colaborador.php">Página Inicial<span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastro
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="cadclientecol.php">Cliente</a>
          <a class="dropdown-item" href="cadprodcol.php">Produto</a>
        </div>
      </li>



       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consulta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="conclientecol.php">Cliente</a>
          <a class="dropdown-item" href="conprodutocol.php">Produto</a>
        </div>
      </li>
     
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
    <span class="badge badge-dark">Colaborador:  <?php echo $_SESSION['usuarioNome']?>
    </span>
    <a href="sair.php" class="btn btn-danger my-2 my-sm-0">Deslogar</a>
    </form>

  </div>
  </div>


<?php }   
        else {
            $_SESSION['loginErro'] = "NÃO ADIANTA MEU BEM NEM FICA TENTANDO2 ;)";
            header("Location:login.php");
    } ?>