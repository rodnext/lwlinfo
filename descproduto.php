<?php  // exibenoticia.php
@session_start();
include ('conexao.php');
header('Content-type: text/html; charset=ISO-8859-1');
$idnoticia = $_GET['idproduto'];
$sql = "select * from tblexibeprod where idproduto='$idproduto'";

$qry = mysqli_query($con,$sql);

$resultado = mysqli_fetch_array($qry);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
<div class="container"><?php
$produto = $resultado['produto'];
$foto = $resultado['foto'];
$descricao = $resultado['descricao'];
//echo $idcliente."-".$cliente."-".$datareg;



echo "<h1>$produto</h1>";
echo "<img src='$foto' align='left' width='410px' height='230px'></br>";
echo "$descricao</br>";

?>
</div>
