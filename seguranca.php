<?php 

@session_start();
function seguranca_adm(){
    if (
        (empty($_SESSION['usuarioId'])) OR 
        (empty($_SESSION['usuarioEmail'])) OR 
        (empty($_SESSION['usuarioNivelAcessoId']))
        )   
        {
            $_SESSION['loginErro'] = "Área Restrita - Necessário LOGIN";
            header("Location:login.php");
    }
}

