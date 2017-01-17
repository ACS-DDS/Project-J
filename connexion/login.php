<?php
require("class/clients.php");
session_start();
$msg = [];

if(!isset($_POST["login"]) || $_POST["login"] == "" || !isset($_POST["password"]) || $_POST["password"] == ""){
	$msg[] = "Merci de renseigner tous les champs";
	$_SESSION["msg"] = $msg;
	header("Location: http://corentinp.dijon.codeur.online/Project_J/connexion");
	exit;
}

if(isset($_POST["login"]) && isset($_POST["password"])){
	$clients = fopen("../.data/db/clients.csv","r");

	while($data = fgetcsv($clients,0,";")){
		if($data[2] == $_POST["login"] && $data[3] == md5("xedon9:" . $_POST["password"] . "_*jura")){
			$_SESSION["client"] = new Client($data);
			header("Location: http://corentinp.dijon.codeur.online/Project_J/catalogue/shop.php");
			exit;
		}
	}
}

$msg[] = "Saisie incorrecte";
$_SESSION["msg"] = $msg;
header("Location: http://corentinp.dijon.codeur.online/Project_J/connexion");
?>