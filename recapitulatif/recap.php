<?php require_once("../connexion/class/clients.php");require_once("../decoupe/commandes.php");require("../connexion/controle.php");?>
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
			<p>Planche choisies : <?= $_SESSION["commandes"]->getMat();?></p>
			<p>Prix : <?= $_SESSION["commandes"]->getPrix($_POST); ?></p>

			<table>
<?php foreach($_SESSION["commandes"]->getProduits() as $produits) : ?>
				<tr>
<?php foreach($produits as $produit) : ?>
					<td><?= $produit; ?></td>
<?php endforeach; ?>
				</tr>
<?php endforeach; ?>
			</table>

			<form action="../xml/validation" method="post" accept-charset="utf-8">
				<button type="submit">Valider</button>
				<button><a href="javascript:history.go(-1)">Retour</a></button>
			</form>
		</div>
	</body>
</html>