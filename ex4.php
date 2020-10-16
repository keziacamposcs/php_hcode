<?php
/*
Variaveis pre-definidas ou Super Globais
*/

$nome = $_GET[""];

var_dump($nome);
/////

//Detectar o IP de provedor de acesso do usuário

//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>