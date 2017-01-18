<?php require_once(".classes/clients.php");require_once(".classes/commandes.php");require(".data/php/controle.php");?>
<table border="1">
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
<table border="1">
	<thead>
		<tr>
			<th>n°</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($_SESSION["commandes"]->getProduits() as $commandes) : ?>
		<tr>
<?php foreach($commandes as $commande) : ?>
			<td><?=$commande;?></td>
<?php endforeach; ?>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>
<form action="xml" method="post" accept-charset="utf-8">
	<input type="hidden" name="nom" value="<?=$_SESSION["client"]->getNom();?>">
	<input type="hidden" name="prenom" value="<?=$_SESSION["client"]->getPrenom();?>">
	<input type="hidden" name="identifiant" value="<?=$_SESSION["client"]->getId();?>">
	<input type="hidden" name="commandes" value="<?=$_SESSION["commandes"]->getProduits();?>">

	<input type="hidden" name="x" value="<?=$_POST['x'];?>" />
	<input type="hidden" name="y" value="<?=$_POST['y'];?>" />
	<input type="hidden" name="w" value="<?=$_POST['w'];?>" />
	<input type="hidden" name="h" value="<?=$_POST['h'];?>" />

	<input type="submit" value="Valider ma commande" />
</form>