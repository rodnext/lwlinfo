<?php

@session_start();
include('conexao.php');

$idusuario = $_POST['idusuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$situacao = $_POST['idsituacao'];
$acesso = $_POST['idnivelacesso'];
$criado = $_POST['criado'];
$modificado = $_POST['modificado'];


$sql = "UPDATE tblusuarios set nome = '$nome',email='$email',senha='$senha',idsituacao='$situacao',idnivelacesso='$acesso',criado='$criado',modificado='$modificado' where idusuario='$idusuario'";
$qry = mysqli_query($con,$sql);

if($qry){
    header("Location:conusuario.php");
}