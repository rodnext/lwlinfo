<?php

@session_start();
include('conexao.php');
include('menu.php');

$idproduto = $_GET['idproduto'];

$sql = "select * from tblexibeprod where idproduto='$idproduto'";

$qry = mysqli_query($con,$sql);

$resultado = mysqli_fetch_array($qry);

$foto = $resultado['foto'];
$produto = $resultado['produto'];
$preco = $resultado['preco'];
$desc = $resultado['descricao'];


?>

<div class="container"><hr>
<h1>Atualizar Produtos</h1><hr>
<form action="uptproduto.php" method="post">
      
                       <input type="hidden" name="idproduto" value="<?php echo $idproduto ?>">
      Foto             <input type="file" name="foto" value="<?php echo $foto ?>"><hr>
      Produto          <input type="text" name="produto" value="<?php echo $produto ?>"><hr>
      Descrição        <input type="text" name="descricao" value="<?php echo $desc ?>"><hr>
      Preço            <input type="text" name="preco" value="<?php echo $preco ?>"><hr>
                       <input type="submit" value="Atualizar Registro" class="btn btn-primary">