<?php
	session_start();

	if(isset($_SESSION["client"])) {
		/*foreach ($_SESSION as $session) {
			unset($session);
		}*/
		unset($_SESSION["client"]);
		header("Location: http://corentinp.dijon.codeur.online/Project_J/.final");
	}

?>