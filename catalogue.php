<?php require_once(".classes/clients.php");require_once(".classes/produit.php");require(".data/php/controle.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Catalogue</title>

		<link rel="stylesheet" type="text/css" href=".data/css/style_planche.css?<?=time();?>">
	</head>
	<body>
		<header>
			<h2>Catalogue</h2>
			<?php require(".data/php/menu_principal.php");?>

		</header>
		<hr>
		<main style="padding-top:4%;">
			<?php require("fget_tab.php");?>

		</main>
		<hr>
	</body>
</html>