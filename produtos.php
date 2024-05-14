
<?php  // noticias.php

@session_start();
include('menus/menu_adm.php');

header('Content-type: text/html; charset=ISO-8859-1');
include ('conexao.php');
 
$sql = "SELECT `idproduto`, `produto`, `preco`, `descricao`, `foto` FROM `tblexibeprod` WHERE idproduto";
$qry = mysqli_query($con,$sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<div class="container">


   

   
<?php while($linha = mysqli_fetch_array($qry)) {
?>
<hr>
<h1> 
  <?php echo $linha['produto']?> </h1>

  <img src=<?php echo $linha['foto']?> width='130px' height='90px'><br>


    <p><?php echo $linha['descricao']?><br>


<a href="exibeprodutos.php?idproduto=<?php echo $linha['idproduto']?>" class="btn btn-info">Ler mais</a>
<a href="carrinho.php?idproduto=<?php echo $linha['idproduto']?>" class="btn btn-info">Adicionar ao Carrinho</a>
 <hr>


     <?php } ?>
 
</div>
