<?php
	session_start();

	if(isset($_SESSION["client"])){
		unset($_SESSION["client"]);
		header("Location: http://corentinp.dijon.codeur.online/Project_J/.final");
	}
?>