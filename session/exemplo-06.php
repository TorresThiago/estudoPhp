<?php 
require_once("config.php");
	
	echo session_save_path();

	echo "<br>";

	var_dump(session_status());

	echo "<br>";

	switch (session_status()) {
		case PHP_SESSION_DISABLED:
			echo "As sessões estão desabilitadas.";
			break;

		case PHP_SESSION_NONE:
			echo "Sessões estiverem habilitadas, mas nenuma existe.";
			break;

		case PHP_SESSION_ACTIVE:
			echo "Sessões estão habilitadas e existem.";
			break;

		default:
			echo "SeNão retornou nenhuma opção";
			break;
	}

 ?>