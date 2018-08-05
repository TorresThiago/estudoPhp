<?php 

	session_id('ebaolj7vbe9s4u3av770boo7si');
	
	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

 ?>