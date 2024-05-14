<?php
@session_start();

    unset(     
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNivelAcessoId'],
        $_SESSION['usuarioEmail']
    );

    $_SESSION['loginDeslogado'] = "Deslogado com Sucesso";
    header("location:login.php");