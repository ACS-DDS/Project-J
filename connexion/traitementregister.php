<?php
session_start();
require '/home/jeanp/xdb.php';

/*$tableau = Xdb::get();
$tableau[] = $_POST;
Xdb::set($tableau)*/
?>

<?php


if (isset($_POST['login'])) {
	$login = $_POST['login'];
	$entreprise = $_POST['entreprise'];
	$pass = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	$mail = $_POST['mail_personnes'];
	$adresse = $_POST['adresse'];
	$cp = $_POST['code_postale'];
	$erreur = 'Identifiants incorrect';
}


?>