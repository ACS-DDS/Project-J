<?php 

	// Si défini deux , possibilité que sa plante le programme
include_once('Membres_class.php');

?>


<?php 
session_start();

/*************************************
* Variables de base 
*************************************/
$folder = fopen('data/clients.csv', 'r');
 	
 	while ($data = fgetcsv($folder,0,';')) {
 		if ($data[2] == $_POST['login'] && $data[3] == $_POST['pass']); {
 			$_SESSION['Logins'] = new Membres($data);
 			header('Location: success.php');
 			exit;
 		}
 		 {
 			echo 'identifiants incorrect';
 		}
 	}




?>
<!-- /*if (isset($_POST['mail'])) {
	$login = $_POST['mail'];
	$erreur = 'Identifiants incorrect';
}*/

/* define(login, Test); // Login défini
 define(pass, test2); // Mdp défini 
 $message = "";  // Var qui renvoi un méssage*/ 

/*************************************
* Verification du formulaire
*************************************/

	// Es que les informations ont été rempli ?  -->



