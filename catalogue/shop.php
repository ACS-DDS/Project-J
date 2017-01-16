<?php /*require ("/home/corentinp/Project_J/connexion/controle.php");*/
require ("/home/corentinp/Project_J/catalogue/class/produit.php");
session_start();
$items = Produit::getProduit($_SESSION['client']->getType());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<link rel="stylesheet" type="text/css" href="../.data/css/style_planche.css">
</head>
<body>
	<header>
		<h2>Shop</h2>
			<?php require ("/home/corentinp/Project_J/menu_principal.php"); ?>
	</header>
	<main style="padding-top:5%">
	<?php 
		foreach ($items as $item) {
			print_r($item);
		}
	?>
	</main>
</body>
</html>