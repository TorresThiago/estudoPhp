<?php 

//include "exemplo-01.php";

/*
include tenta funcionar mesmo q o arquivo n exista ou esteja c erros. 
Também dá acesso ao includ_path, ou seuja, permite includ de outras pastas E de dominios externos, ou seja, da internet.
*/

require_once "exemplo-01.php";
require_once "exemplo-01.php";

/*
require obriga que a inclusão do arquivo esteja correto E exista
O require se torna mais interessante.
*/
$resultado = somar(10,25);

echo $resultado;

 ?>