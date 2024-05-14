<?php

@session_start();
include('conexao.php');
include('menu.php');

$idcliente = $_GET['idcliente'];

$sql = "select * from tblcliente where idcliente='$idcliente'";

$qry = mysqli_query($con,$sql);

$resultado = mysqli_fetch_array($qry);

$cliente = $resultado['nome'];
$cpf = $resultado['cpf'];
$email = $resultado['email'];
$senha = $resultado['senha'];
$telefone = $resultado['telefone'];

//echo $idcliente." - ".$cliente." - ".$datareg; 
?>

<div class="container">
<h1>Atualizar Cliente</h1>
<form action="uptcliente.php" method="post">
      
                        <input type="hidden" name="idcliente" value="<?php echo $idcliente ?>">
      cliente           <input type="text" name="nome" value="<?php echo $cliente ?>">
      cpf               <input type="text" name="cpf" value="<?php echo $cpf ?>">
      email             <input type="text" name="email" value="<?php echo $email ?>">
      senha             <input type="text" name="senha" value="<?php echo $senha ?>">
      telefone          <input type="text" name="telefone" value="<?php echo $telefone ?>">
                        <input type="submit" value="Atualizar Registro" class="btn btn-primary">