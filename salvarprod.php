<?php   // salvarnoticia.php

@session_start();
include ('conexao.php');

$produto = $_POST['produto'];
$foto = $_POST['foto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$sql = "insert into tblexibeprod (produto,foto,descricao,preco) values
 ('$produto','$foto','$descricao','$preco')";
 
 $qry = mysqli_query($con,$sql);
 
 header('Location:produtos.php');