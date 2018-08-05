<?php 

function Ola($texto, $periodo = "Bom Dia"){

	return "Olá $texto! $periodo<br>";

}

echo Ola("World");
echo Ola("mundo");
echo Ola("Torres","Boa noite");
echo Ola("Aline","");

 ?>