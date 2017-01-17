<?php
	session_start();
	include_once('Membres_class.php'); 

	$folder = fopen('data/clients.csv', 'r');

	while ($data = fgetcsv($folder,0,';')){ 
 		if ($data[2] == $_POST['login'] && $data[3] == $_POST['pass']); 
 		{
 			$_SESSION['Membres'] = new Membres($data);
 			$_SESSION['nom'] = $data[0]." ".$data[1];
 			$_SESSION['type'] = $data[4];
 			if ($_SESSION['Membres'] == new Membres($data)) 
 			{
 			echo "Connexion en cours";
 			header("Location: success.php");
 			exit;
 			}
 		}

		if (!isset($_POST['login']) || $_POST["login"] == "" || !isset($_POST['pass']) || $_POST['pass'] == "" )
		{
		header("Location: index.php");
		exit;
		}


	}		
?>