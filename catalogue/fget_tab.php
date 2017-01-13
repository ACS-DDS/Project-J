<style>th,td{border:solid grey 2px;}</style>
<?php
	$r = "<br>";
	$tabs = ["Référence","Matière","Longueur","Epaisseur","Action"];
	$commande = fopen("../.data/db/produits.csv","r");
	$i = 0;
	$type = [];
	$lignes = [];
	//$me = 2; // gros => 0 | standard => 1 | luxe => 2
	if(isset($_SESSION["client"])) : 
		if($_SESSION["client"]->getType() == "gros") : 
			$me = 0;
		elseif($_SESSION["client"]->getType() == "standard") : 
			$me = 1;
		elseif($_SESSION["client"]->getType() == "standard") : 
			$me = 2;
		endif;
	endif;

	while($i < 19) :
		$lignes[] = fgetcsv($commande,0,";");

		$lignes[$i][5] = array_map("trim",explode(",",$lignes[$i][5]));
		$lignes[$i][4] = array_map("trim",explode(",",$lignes[$i][4]));

		if(in_array("gros",array_map("trim",$lignes[$i][5]))) : 
			$type[0][] = $lignes[$i];
		endif;
		if(in_array("standard",array_map("trim",$lignes[$i][5]))) : 
			$type[1][] = $lignes[$i];
		endif;
		if(in_array("luxe",array_map("trim",$lignes[$i][5]))) : 
			$type[2][] = $lignes[$i];
		endif;

		$i++;
	endwhile;
?>
<section class="block_tab">
	<table> 
		<thead>
			<tr>
<?php foreach($tabs as $tab){?>
				<th><?=$tab;?></th>
<?php }?> 
			</tr>
		</thead>
		<tbody>
<?php foreach($type[$me] as $types) : ?>
			<form action="http://corentinp.dijon.codeur.online/Project_J/decoupe/" method="post">
				<tr>
					<td><?=$types[0];?></td>
					<td><?=$types[1];?></td>
					<td><?=$types[2] . " x " . $types[3];?></td>
					<td>
						<select name="epa" multiple>
<?php foreach($types[4] as $types2) : ?>
							<option value="<?=$types2;?>"><?=$types2;?></option>
<?php endforeach; ?>
						</select>
					</td>
					<td>
						<input type="submit" value="Découper "/>
						<input type="hidden" name="ref" value="<?=$types[0];?>" />
						<input type="hidden" name="mat" value="<?=$types[1];?>" />
						<input type="hidden" name="lon1" value="<?=$types[2];?>" />
						<input type="hidden" name="lon2" value="<?=$types[3];?>" />
					</td>
				</tr>
			</form>
<?php
		endforeach;
?>
		</tbody>
	</table>
</section>