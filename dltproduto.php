<?php
@session_start();

include('conexao.php');

$idproduto = $_GET['idproduto'];


$sql = "delete from tblexibeprod where idproduto='$idproduto'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:conproduto.php");
}