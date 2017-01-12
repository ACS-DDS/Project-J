<?php
	session_start();
	include_once('Membres_class.php'); 

	$folder = fopen('data/clients.csv', 'r');
 	
	while ($data = fgetcsv($folder,0,';')){ 
 		if ($data[2] == $_POST['login'] && $data[3] == $_POST['pass']); {
 			echo "Connexion en cours";
 			$_SESSION['Membres'] = new Membres($data);
 		}if ($_SESSION['Membres'] !== new Membres($data)) 
 		{
 			echo "Connexion erroné";
 			header('Location: index.php');
			exit;
 		}
 			header('Location: success.php');
 			exit;
	}		
?>