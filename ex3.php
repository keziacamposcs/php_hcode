<?php
/*
Nós temos no php, 8 tipos de dados primitivos
divididos em 3 grupos:
- tipos básicos(int, string, float, bool)
- tipos compostos: (array, objeto)
- tipos de dados especiais: (resource, null)
*/

//TIPOS BÁSICOS:
$nome = 'Hcode';
$site = 'www.hcode.com.br';

//numero não tem '', caso tenha, vira um TEXTO
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
//////////////////////////////////////////////


//TIPOS COMPOSTOS:
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

/*
o 'new'define que a varivavel abaixo é uma POO
*/

$nascimento = new DateTime();

var_dump ($nascimento);
///////////////////////////////////////////////


//TIPOS ESPECIAIS:
$arquivo = fopen ("ex3.php", "r");

var_dump($arquivo);

$nulo = NULL;
///////////////////////////////////////////////
?>
