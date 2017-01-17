<?php require_once(".classes/clients.php");require_once(".classes/commandes.php");require_once(".classes/prix.php");require(".data/php/controle.php");
$produits = fopen(".data/db/produits.csv","r");
$data = fgetcsv($produits,0,";");
$_SESSION["prix"] = new Prix($data);?>
<!DOCTYPE html>
<html>
	<head>
		<title>----- Devis ------</title>
		<link rel="stylesheet" type="text/css" href=".data/css/styles2.css">
	</head>
	<body>
		<?php require(".data/php/menu_principal.php");?>
		<div id="devis">
			<img class="devis_png" src=".data/img/devis.png">
			<div class="box">
				<p>Nom : <?= $_SESSION["client"]->getNom();?> </p>
				<p>Prénom : <?= $_SESSION["client"]->getPrenom();?></p>
				<p>Adresse : <?= $_SESSION["client"]->getAdr();?></p>
				<p>Planche choisis : <?= $_SESSION["commandes"]->getMat();?></p>
				<p>Prix : <?= $_SESSION["prix"]->getPrix();?></p>
				<table border="1">
				<?php foreach($_SESSION["commandes"]->getProduits() as $produits) : ?>
					<tr>
				<?php foreach($produits as $produit) : ?>
						<td><?= $produit; ?></td>
				<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>
			<form action="recap" method="post" accept-charset="utf-8">
				<input type="submit" value="Valider">
				<button><a href="javascript:history.go(-1)">Retour</a></button>
			</form>
		</div>
	</body>
</html>