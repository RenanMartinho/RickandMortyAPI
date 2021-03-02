<?php

$host = "localhost";
$usuario = "renan";
$senha="123456";
$bd = "rickandmorty";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli -> connect_errno)
    echo "Falha ao conectar ao banco: (".$mysqli -> connect_errno.") ".$mysqli-> connect_error;

?>

