<?php
	session_start();
	include_once('Membres_class.php');

	$fichier = fopen('data/clients.csv', 'r');
	
	if(empty($_POST['mail'])) {
		
		echo "Votre mail n'es pas valide";
	}
	if(empty($_POST['password'])) {
		echo "Votre mot de passe est invalide";
	}

	while ($clients = fgetcsv($fichier,0,';')) {
		if($clients[2] == $_POST['mail'] && $clients[3] == $_POST['password'])
		
		{
			$_SESSION['Membres'] = new Membres($clients);
			header('Location: projet/j.php');
			exit;
		}
	}
?>
