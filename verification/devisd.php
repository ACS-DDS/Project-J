<?php 

require_once("../connexion/class/clients.php");
require_once("../decoupe/commandes.php");
require("../connexion/controle.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>----- Devis ------</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<?php require("../menu_principal.php");?>
		<div id="devis">
			<img class="devis_png" src="img/devis.png">
			<div class="box">
				<p>Nom : <?= $_SESSION["client"]->getNom();?> </p>
				<p>Prénom : <?= $_SESSION["client"]->getPrenom();?></p>
				<p>Adresse : <?= $_SESSION["client"]->getAdr();?></p>
				<p>Planche choisis : <?= $_SESSION["commandes"]->getMat();?></p>
				<p>Prix : <?= $_SESSION["commandes"]->getPrix($_POST);?></p>
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
			<form action="../recapitulatif/recap" method="post" accept-charset="utf-8">
				<input type="submit" value="Valider">

				<input type="hidden" name="x" value="<?=$_POST['x'];?>" />
				<input type="hidden" name="y" value="<?=$_POST['y'];?>" />
				<input type="hidden" name="w" value="<?=$_POST['w'];?>" />
				<input type="hidden" name="h" value="<?=$_POST['h'];?>" />
				<button><a href="javascript:history.go(-1)">Retour</a></button>
			</form>
		</div>
	</body>
</html>
