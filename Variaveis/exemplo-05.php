<?php 

$nome = "Torres";

function Teste(){

	global $nome;
	echo $nome;
}

function teste02(){

	//$nome = "Rosa";

	echo $nome. "Agora no teste 02";

}

teste();
teste02();

?>