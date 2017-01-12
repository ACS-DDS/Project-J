<?php 
	
	if(isset($_GET["error"])) {

		switch ($_GET["error"]) {
			case 1:
				echo "Veuillez vous connecter";
				break;

			case 2:
				echo "Merci de renseigner tous les champs";
				break;

			case 3:
				echo "Saisie incorrecte";
				break;
		}
	}
?>