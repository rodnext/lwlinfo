<?php

@session_start();
include('conexao.php');

$idproduto = $_POST['idproduto'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$desc = $_POST['descricao'];
$foto = $_POST['foto'];



$sql = "UPDATE tblexibeprod set produto = '$produto',preco='$preco',descricao='$desc',foto='$foto' where idproduto='$idproduto'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:conprodutocol.php");
}