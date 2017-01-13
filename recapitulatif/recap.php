<?php require_once("../connexion/class/clients.php");require_once("../verification/prix.php");require("../connexion/controle.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page de récapitulatif</title>
	</head>
	<body>
		<div id="recap">
			<?php require("../menu_principal.php");?>
			<h1><center>Rapport de votre commandes</center></h1>
			<h2><center>Merci d'avoir choisis Nodex Connexion</center></h2>
			<p>Nom : <?= $_SESSION["client"]->getNom();?> </p>
			<p>Prénom : <?= $_SESSION["client"]->getPrenom();?></p>
			<p>Adresse : <?= $_SESSION["client"]->getAdr();?></p>
			<p>Planche choisies : <?= $_SESSION["commandes"]->getProduit();?></p>
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

			<form action="../xml/validation" method="post" accept-charset="utf-8">
				<button type="submit">Valider</button>
				<button><a href="javascript:history.go(-1)">Retour</a></button>
			</form>
		</div>
	</body>
</html>