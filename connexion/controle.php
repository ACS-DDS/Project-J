<?php
session_start();

if(!isset($_SESSION["client"])){
	header("Location: http://corentinp.dijon.codeur.online/Project_J/connexion");
	exit;
}
?>