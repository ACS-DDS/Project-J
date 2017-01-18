	<table> 
		<tbody>
			<form action="http://corentinp.dijon.codeur.online/.poo/decoupe" method="post">
				<tr>
					<td><?=$this->ref;?></td>
					<td><?=$this->mat;?></td>
					<td><?=$this->long . " x " . $this->larg;?></td>
					<td>
						<select name="epaisseur">
						<?php foreach($this->ep as $epaisseur) : ?>
							<option value="<?=$epaisseur;?>"><?=$epaisseur;?></option>
						<?php endforeach; ?>
						</select>
					</td>
					<td>
						
						<input type="hidden" name="reference" value="<?=$this->ref;?>" />
						<input type="hidden" name="matiere" value="<?=$this->mat;?>" />
<?php if(isset($this->pl)) : ?>
						<input type="number" name="longueur" min="0" step="<?=$this->inc;?>" value="<?=$this->long;?>" />
						<br />
						<input type="number" name="largeur" min="0" step="<?=$this->inc;?>" value="<?=$this->larg;?>" />
<?php else : ?>
						<input type="hidden" name="longueur" value="<?=$this->long;?>" />
						<br />
						<input type="hidden" name="largeur" value="<?=$this->larg;?>" />
<?php endif;?>
						<input type="submit" value="Découper "/>
					</td>
				</tr>
			</form>
		</tbody>
	</table>
</section>