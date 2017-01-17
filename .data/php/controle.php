<?php
session_start();

if(!isset($_SESSION["client"])){
	header("Location: http://corentinp.dijon.codeur.online/.final");
	exit;
}
?>