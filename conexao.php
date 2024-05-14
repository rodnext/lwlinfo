<?php

$servidor = "localhost";
$usuario ="root";
$senha ="";
$bd ="bdinfo";

@$con = mysqli_connect($servidor,$usuario,$senha,$bd);
//var_dump($con);

if(!$con){
    echo "Não conectou";
}

mysqli_set_charset($con, "utf8");