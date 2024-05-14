<?php
@session_start();

include('conexao.php');

$idcliente = $_GET['idcliente'];


$sql = "delete from tblcliente where idcliente='$idcliente'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:concliente.php");
}