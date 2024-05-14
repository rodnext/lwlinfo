<?php


@session_start();
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$idsituacao = $_POST['idsituacao'];
$idnivelacesso = isset($_POST['idnivelacesso']) ? $_POST['idnivelacesso'] : 3;
$criado = $_POST['criado'];
$modificado = $_POST['modificado'];


//insert into nometabela (nomes das tabelas do bd)
$sql = "INSERT INTO tblusuarios (nome,email,senha,idsituacao,idnivelacesso,criado,modificado) values ('$nome','$email','$senha','$idsituacao','$idnivelacesso','$criado','$modificado')";

$qry = mysqli_query($con,$sql);

if($qry){
    
    echo 
    $_SESSION['Cadastrado com sucesso'];
    echo "<a href='menu.php'>Continuar</a> - <a href='cadusuario.php'>Voltar</a>";
}

else{
    echo "Não Cadastrado<br>";
    echo "Informe ao ADM - <a href='cadusuario.php'>Voltar</a>";
}

header("Location: cadusuario.php");
