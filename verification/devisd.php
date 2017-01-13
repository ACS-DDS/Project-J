<?php require_once("../connexion/class/clients.php");require_once("prix.php");require("../connexion/controle.php");
$produits = fopen("../.data/db/produits.csv","r");
$data = fgetcsv($produits,0,";");
$_SESSION["prix"] = new Prix($data);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>----- Devis ------</title>
	</head>
	<body>
		<div id="devis">
			<?php require("../menu_principal.php");?>
			<h1 style="text-align:center">Devis</h1>
			<p>Nom : <?= $_SESSION["client"]->getNom();?> </p>
			<p>Prénom : <?= $_SESSION["client"]->getPrenom();?></p>
			<p>Adresse : <?= $_SESSION["client"]->getAdr();?></p>
			<p>Planche choisis : <?= $_SESSION["commandes"]->getProduit();?></p>
			<p>Prix : <?= $_SESSION["prix"]->getPrix();?></p>

			<table>
			<?php foreach($_SESSION["commandes"] as $produits) : ?>
			<?php foreach($produits as $produit) : ?>
				<tr>
					<td><?= $produit; ?></td>
				</tr>
			<?php endforeach; ?>
			<?php endforeach; ?>
			</table>
			<form action="../recapitulatif/recap" method="post" accept-charset="utf-8">
				<input type="submit" value="Valider">
				<button><a href="javascript:history.go(-1)">Retour</a></button>
			</form>
		</div>
	</body>
</html>
