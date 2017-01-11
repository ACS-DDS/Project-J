<?php 
	// Si défini deux , possibilité que sa plante le programme
/*include_once('Membre.class.php');*/

$clients = [];
$clients = $row;

$row = 1;
	// je pointe le fichier et je l'ouvre clients.csv en lecture seule
if (($handle = fopen("clients.csv", "r")) !==FALSE ):
	// On boucle sur la variable data sur chaque ligne 
	while (($data = fgetcsv($handle,0,",")) !==FALSE ): 
		$num = count($data);
		$row++;
		for ($count =0;$count < $num; $count++):
		echo $data[$count]."<br/>\n";
		endfor;
	endwhile;
	fclose($handle);
endif;
$csvline = array(); // définition d'un tableau à remplir 
	for($i =0; $i < $data; $i++) {
		
	}
echo $clients;

/*************************************
* Variables de base 
*************************************/












/*if (isset($_POST['mail'])) {
	$login = $_POST['mail'];
	$erreur = 'Identifiants incorrect';
}*/

/* define(login, Test); // Login défini
 define(pass, test2); // Mdp défini 
 $message = "";  // Var qui renvoi un méssage*/ 

/*************************************
* Verification du formulaire
*************************************/

	// Es que les informations ont été rempli ? 



?>