<?php 
    

//Tipos de dados PHP - básicos

$nome = "Torres";
$site = 'www.hcode.com.br';

$ano = '1987';
$salario = 5500.99;
$bloqueado = false;

//Tipos de dados PHP - compostos

$frutas = array("abacaxi","banana","manga","laranja");

echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);


//Tipos de dados PHP - especiais

$arquivo = fopen("exemplo-03.php","r");
var_dump($arquivo);

$nulo = null;

 ?>