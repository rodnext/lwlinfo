<?php //exibeprodutos.php
@session_start();
include ('conexao.php');
include ('menus/menu_cliente.php');


//{ background-image: url(img/body.jpg); }
?>
<html lang="pt-br">
  <head>
  <style type="text/css">
  body { background-image: url(img/body.jpg); }
  .container
  { background-color:  #F0F8FF; }
  #myCarousel {
    width: 50%;
    height: 40%;
    margin: 0 auto;
  }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container" ><main role="main">
  <br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="img/pcgamer2.jpg" width="320" height="205">
      <div class="container">
        <div class="carousel-caption text-left">
        </div>
      </div>
    </div>

    <div class="carousel-item">
    <img class="d-block w-100" src="img/pcgamer.jpg" width="320" height="205">
     <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <div class="carousel-item">
    <img class="d-block w-100" src="img/rtx.jpg" width="320" height="205">
    <div class="container">
        <div class="carousel-caption text-right">
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br> 
<hr>
    <div class="container">
        <form class="form-inline my-2 my-md-0">
          <br>
          <div class="form-group">
          <br>
            <input class="form-control" type="text" placeholder="Buscar Produto" aria-label="Search" name="busca">

          </div><?php @$busca = $_GET['busca']; ?>
          <input class="btn btn-lg- btn-primary" type="submit" href="table" value="Buscar">
    <span><a class="container">Buscando: <?php 
          if ($busca) {
            echo $busca;
          } 
          ?></a></span>
          </form>
    </div>        
<hr>
  <div class="row">
<?php  // noticias.php
 
$sql = "SELECT `idproduto`, `produto`, `preco`, `descricao`, `foto` FROM `tblexibeprod` WHERE idproduto";
$qry = mysqli_query($con,$sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<div class="container">

<?php //codigo produtos
        $sql = "select * from tblexibeprod";
        $qry = mysqli_query($con,$sql);
        ?>
        <div class="table-responsive">
        <table class='table'>
        <thead class='thead-dark text-center'>
            <th scope='col'>Produtos</th>
            <th scope='col'>Nome</th>
            <th scope='col'>Descrição</th>
           <!--  <th scope='col'>Data Registro</th> -->
            <th scope='col'>Preço</th>
            <th scope='col'></th>
        </thead>
        <?php
            @$busca = $_GET['busca'];
            $sql = "SELECT * FROM tblexibeprod WHERE produto LIKE '%$busca%'";
            $qry = mysqli_query($con,$sql);

        while ($linha = mysqli_fetch_array($qry)){
            //$data = $linha['preco'];
            ?>
            <tbody class="text-center">
            <tr>
            <?php  echo "<td scope='row img-thumbnail'> <img src='img/{$linha['foto']}' width='120px' height='80px'> </td>" ?>
            <td ><?php echo $linha['produto']?></td>
            <td><?php echo $linha['descricao']?></td>
            <!-- <td scope='row'><?php echo date("d/m/yy",strtotime($data)) ?></td> -->
            <td><?php echo $linha['preco']?></td>
            <td class="text-right"><a href="carrinho.php?acao=add&id=<?php echo $linha['idproduto']?>" class="btn btn-info ">Comprar</a>
            <a href="carrinho.php?idproduto=<?php echo $linha['idproduto']?>" class="btn btn-success"><img src='img/cart.svg' alt='text' width='20px' height='30px'></a></td>
            </tbody>
        <?php } ?>
        </table>
    </div>
    </div>

          
        <footer class="container">
        <hr>
    <p class="float-right"><a href="#" class="btn btn-lg- btn-black" type="submit">Voltar ao topo</a></p>
    <p>&copy; 2017-2020 Eletronics LTDA</p>
  </footer>
      </div>
    </div>
  </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>