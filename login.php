<?php
require ("class/clients.php");
session_start();
$msg = [];


if(!isset($_POST["login"]) || $_POST["login"] == "" || !isset($_POST["password"]) || $_POST["password"] == "") {
	$msg[] = "Merci de renseigner tous les champs";
	$_SESSION["msg"] = $msg;
	header("Location: ./");
	exit;
}

if (isset($_POST["login"]) && isset($_POST["password"])) {
	$clients = fopen("data/clients.csv", "r");

	while ($data = fgetcsv($clients, 0, ";")) {
		if ($data[2] == $_POST["login"] && $data[3] == $_POST["password"]) {
			$_SESSION["nom"] = $data[0] . " " . $data[1];
			$_SESSION["type"] = $data[4];
			$_SESSION["client"] = new Client($data);
			header("Location: ./catalogue");
			exit;
		}
	}
}

$msg[] = "Saisie incorrecte";
$_SESSION["msg"] = $msg;
header("Location: ./");

?>