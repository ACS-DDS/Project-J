<?php require_once(".classes/produit.php");require_once(".classes/clients.php");require_once(".data/php/controle.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<link rel="stylesheet" type="text/css" href=".data/css/style_planche.css">
</head>
<body>
	<header>
		<h2>Shop</h2>
			<?php require(".data/php/menu_principal.php");?>
	</header>
	<main style="padding-top:5%">
	<section class="block_tab">
		<table> 
			<thead>
				<tr>
					<th>Référence</th>
					<th>Matière</th>
					<th>Longueur</th>
					<th>Epaisseur</th>
					<th>Action</th>
				</tr>
			</thead>
	<?php
		$items = Produit::getProduit($_SESSION["client"]->getType());
		foreach($items as $item){
			echo $item;
		}
	?>
	</main>
</body>
</html>