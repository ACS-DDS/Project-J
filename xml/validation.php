<?php require_once("../connexion/class/clients.php");require("../connexion/controle.php");
//
?>
<table>
	<thead>
		<tr>
			<th>header</th>
			<th>header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label>Nom: </label></td>
			<td><?=$_SESSION["client"]->getNom();?></td>
		</tr>
		<tr>
			<td><label>Prénom: </label></td>
			<td><?=$_SESSION["client"]->getPrenom();?></td>
		</tr>
		<tr>
			<td><label>ID: </label></td>
			<td><?=$_SESSION["client"]->getId();?></td>
		</tr>
	</tbody>
</table>
<table>
	<thead>
		<tr>
			<th>n°</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($_SESSION["commandes"] as $commandes) : ?>
<?php foreach($commandes as $commande) : ?>
		<tr>
			<td><?=$commande;?></td>
		</tr>
<?php endforeach; ?>
<?php endforeach; ?>
	</tbody>
</table>
<form action="xml" method="post" accept-charset="utf-8">
	<input type="hidden" name="nom" value="<?=$_SESSION["client"]->getNom();?>">
	<input type="hidden" name="prenom" value="<?=$_SESSION["client"]->getPrenom();?>">
	<input type="hidden" name="identifiant" value="<?=$_SESSION["client"]->getId();?>">
	<input type="hidden" name="commandes" value="<?=$_SESSION["commandes"]->getProduits;?>">
	<input type="hidden" name="coordonees" value="<?=$_SESSION["commandes"]->getCoord;?>">

	<input type="submit" value="Valider ma commande" />
</form>