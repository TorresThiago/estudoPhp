<?php 
function Ola(){

	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(Ola("Bom dia","teste",[10,11,15]));

 ?>