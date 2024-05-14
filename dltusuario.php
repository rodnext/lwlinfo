<?php
@session_start();

include('conexao.php');

$idusuario = $_GET['idusuario'];


$sql = "delete from tblusuarios where idusuario='$idusuario'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:conusuario.php");
}