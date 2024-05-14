<?php

@session_start();
include('conexao.php');
include('menus/menu_adm.php');

$idusuario = $_GET['idusuario'];

$sql = "select * from tblusuarios where idusuario='$idusuario'";

$qry = mysqli_query($con,$sql);

$resultado = mysqli_fetch_array($qry);

$nome = $resultado['nome'];
$email = $resultado['email'];
$senha = $resultado['senha'];
$idsituacao = $resultado['idsituacao'];
$acesso = $resultado['idnivelacesso'];
$criado = $resultado['criado'];
$modificado = $resultado['modificado'];

//echo $idcliente." - ".$cliente." - ".$datareg; 
?>

<body>
<div class="container">
<h1>Atualizar Cliente</h1>
<form action="uptusuario.php" method="post">
      
                        <input type="hidden" name="idusuario" value="<?php echo $idusuario ?>"><br>
      cliente           <input type="text" name="nome" value="<?php echo $nome ?>"><br>
      email             <input type="text" name="email" value="<?php echo $email ?>"><br>
      senha             <input type="text" name="senha" value="<?php echo $senha ?>"><br>
      idsituacao        <input type="text" name="idsituacao" value="<?php echo $idsituacao ?>"><br>
      acesso            <input type="text" name="acesso" value="<?php echo $acesso ?>"><br>
      criado            <input type="text" name="criado" value="<?php echo $criado ?>"><br>
      modificado        <input type="text" name="modificado" value="<?php echo $modificado ?>"><br>
                        <input type="submit" value="Atualizar Registro" class="btn btn-primary">

                        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>