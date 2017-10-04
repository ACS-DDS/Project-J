<?php
	session_start();

	if(isset($_SESSION["client"])){
		unset($_SESSION["client"]);
		unset($_SESSION["commandes"]);
		unset($_SESSION["prix"]);

		header("Location: ./");
	}
?>