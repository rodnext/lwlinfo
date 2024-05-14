<?php

@session_start();
include('conexao.php');

$idcliente = $_POST['idcliente'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];


$sql = "UPDATE tblcliente set nome = '$nome',cpf='$cpf' where idcliente='$idcliente'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:concliente.php");
}