<?php require_once("../connexion/class/clients.php");require("../connexion/controle.php");?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Catalogue</title>

		<link rel="stylesheet" type="text/css" href="../.data/css/style_planche.css?<?=time();?>">
	</head>
	<body>
		<header>
			<h2>Catalogue</h2>
			<?php require("../menu_principal.php");?>

		</header>
		<hr>
		<main style="padding-top:4%;">
			<?php require("fget_tab.php");?>

		</main>
		<hr>
	</body>
</html>