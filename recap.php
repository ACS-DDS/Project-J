<?php require_once(".classes/clients.php");require_once(".classes/prix.php");require_once(".classes/commandes.php");require(".data/php/controle.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page de récapitulatif</title>
	</head>
	<body>
		<div id="recap">
			<?php require(".data/php/menu_principal.php");?>
			<h1><center>Rapport de votre commandes</center></h1>
			<h2><center>Merci d'avoir choisis Nodex</center></h2>
			<p>Nom : <?= $_SESSION["client"]->getNom();?> </p>
			<p>Prénom : <?= $_SESSION["client"]->getPrenom();?></p>
			<p>Adresse : <?= $_SESSION["client"]->getAdr();?></p>
			<p>Planche choisies : <?= $_SESSION["commandes"]->getMat();?></p>
			<p>Prix : <?= $_SESSION["prix"]->getPrix();?></p>

			<table>
<?php foreach($_SESSION["commandes"]->getProduits() as $produits) : ?>
				<tr>
<?php foreach($produits as $produit) : ?>
					<td><?= $produit; ?></td>
<?php endforeach; ?>
				</tr>
<?php endforeach; ?>
			</table>

			<form action="validation" method="post" accept-charset="utf-8">
				<button type="submit">Valider</button>
				<button><a href="javascript:history.go(-1)">Retour</a></button>
			</form>
		</div>
	</body>
</html>