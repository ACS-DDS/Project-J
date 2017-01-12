<?php
require "class/clients.php";
session_start();


if(!isset($_POST["login"]) || $_POST["login"] == "" || !isset($_POST["password"]) || $_POST["password"] == "") {
	header("Location: 2");
	exit;
}

if (isset($_POST["login"]) && isset($_POST["password"])) {
	$clients = fopen("clients.csv", "r");

	while ($data = fgetcsv($clients, 0, ";")) {
		if ($data[2] == $_POST["login"] && $data[3] == $_POST["password"]) {
			$_SESSION["client"] = new Client($data);
			$_SESSION["nom"] = $data[0] . " " . $data[1];
			$_SESSION["type"] = $data[4];
			header("Location: http://corentinp.dijon.codeur.online/Project_J/catalogue/catalogue.php");
			exit;
		}
	}
}

header("Location: 3");

?>