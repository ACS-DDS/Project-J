<?php 

	$tabs = ["Référence","Matière","Longueur","Epaisseur","Type de client", "", ""];

	$client = ["Standard","Luxe","Gros"];

	$commandes =	[
		[
			"nodexch1pa",
			"chêne",
			"1000mm x 1000mm",
			"25",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch1pa",
			"chêne",
			"1000mm x 1000mm",
			"40",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch1pa",
			"chêne",
			"1000mm x 1000mm",
			"60",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch2pa",
			"chêne",
			"1000mm x1500mm",
			"25",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch2pa",
			"chêne",
			"1000mm x1500mm",
			"40",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch2pa",
			"chêne",
			"1000mm x1500mm",
			"60",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch1pf",
			"chêne",
			"1500mm x 2000mm",
			"25",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch1pf",
			"chêne",
			"1500mm x 2000mm",
			"40",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch1pf",
			"chêne",
			"1500mm x 2000mm",
			"60",
			$client[0],
			$client[1],
			$client[2]
		],[
			"nodexch2pf",
			"chêne",
			"1500mm x 3000mm",
			"25",
			$client[2],
			$client[0]
		],[
			"nodexch2pf",
			"chêne",
			"1500mm x 3000mm",
			"40",
			$client[2],
			$client[0]
		],[
			"nodexch2pf",
			"chêne",
			"1500mm x 3000mm",
			"60",
			$client[2],
			$client[0]
		],[ /* verifier pour 5000x5000 si chêne*/
			"nodexch1ga",
			"chêne",
			"5000mm x 5000mm",
			"25",
			$client[2]
		],[
			"nodexch1ga",
			"chêne",
			"5000mm x 5000mm",
			"40",
			$client[2]
		],[
			"nodexch1ga",
			"chêne",
			"5000mm x 5000mm",
			"60",
			$client[2]
		],[
			"nodexmr1pc",
			"merisier",
			"700mm x 1000mm",
			"15",
			$client[1]
		],[
			"nodexmr1pc",
			"merisier",
			"700mm x 1000mm",
			"20",
			$client[1]
		],[
			"nodexmr1pc",
			"merisier",
			"700mm x 1000mm",
			"30",
			$client[1]
		],[
			"nodexmr1pl",
			"merisier",
			"1000mm x 1000mm",
			"15",
			$client[1]
		],[
			"nodexmr1pl",
			"merisier",
			"1000mm x 1000mm",
			"20",
			$client[1]
		],[
			"nodexmr1pl",
			"merisier",
			"1000mm x 1000mm",
			"30",
			$client[1]
		],[
			"nodexmr2pl",
			"merisier",
			"1000mm x 1400mm",
			"15",
			$client[1]
		],[
			"nodexmr2pl",
			"merisier",
			"1000mm x 1400mm",
			"20",
			$client[1]
		],[
			"nodexmr2pl",
			"merisier",
			"1000mm x 1400mm",
			"30",
			$client[1]
		],[
			"nodexmr1gc",
			"merisier",
			"2000mm x 2000mm",
			"15",
			$client[1]
		],[
			"nodexmr1gc",
			"merisier",
			"2000mm x 2000mm",
			"20",
			$client[1]
		],[
			"nodexmr1gc",
			"merisier",
			"2000mm x 2000mm",
			"30",
			$client[1]
		],[
			"nodexmr2gc",
			"merisier",
			"2000mm x 2800mm",
			"15",
			$client[1]
		],[
			"nodexmr2gc",
			"merisier",
			"2000mm x 2800mm",
			"20",
			$client[1]
		],[
			"nodexmr2gc",
			"merisier",
			"2000mm x 2800mm",
			"30",
			$client[1]
		],[
			"nodexsa1pf",
			"sapin",
			"1500mm x 1500mm",
			"25",
			$client[0],
			$client[2]
		],[
			"nodexsa1pf",
			"sapin",
			"1500mm x 1500mm",
			"40",
			$client[0],
			$client[2]
		],[
			"nodexsa1pf",
			"sapin",
			"1500mm x 1500mm",
			"50",
			$client[0],
			$client[2]
		],[
			"nodexsa1pf",
			"sapin",
			"1500mm x 1500mm",
			"65",
			$client[0],
			$client[2]
		],[
			"nodexsa1pf",
			"sapin",
			"1500mm x 1500mm",
			"80",
			$client[0],
			$client[2]
		],[
			"nodexsa2pf",
			"sapin",
			"1500mm x 2000mm",
			"25",
			$client[0],
			$client[2]
		],[
			"nodexsa2pf",
			"sapin",
			"1500mm x 2000mm",
			"40",
			$client[0],
			$client[2]
		],[
			"nodexsa2pf",
			"sapin",
			"1500mm x 2000mm",
			"50",
			$client[0],
			$client[2]
		],[
			"nodexsa2pf",
			"sapin",
			"1500mm x 2000mm",
			"65",
			$client[0],
			$client[2]
		],[
			"nodexsa2pf",
			"sapin",
			"1500mm x 2000mm",
			"80",
			$client[0],
			$client[2]
		],[
			"nodexsa3pf",
			"sapin",
			"1500mm x 2500mm",
			"25",
			$client[0],
			$client[2]
		],[
			"nodexsa3pf",
			"sapin",
			"1500mm x 2500mm",
			"40",
			$client[0],
			$client[2]
		],[
			"nodexsa3pf",
			"sapin",
			"1500mm x 2500mm",
			"50",
			$client[0],
			$client[2]
		],[
			"nodexsa3pf",
			"sapin",
			"1500mm x 2500mm",
			"65",
			$client[0],
			$client[2]
		],[
			"nodexsa3pf",
			"sapin",
			"1500mm x 2500mm",
			"80",
			$client[0],
			$client[2]
		],[
			"nodexsa1mf",
			"sapin",
			"3000mm x 3000mm",
			"25",
			$client[2]
		],[
			"nodexsa1mf",
			"sapin",
			"3000mm x 3000mm",
			"40",
			$client[2]
		],[
			"nodexsa1mf",
			"sapin",
			"3000mm x 3000mm",
			"50",
			$client[2]
		],[
			"nodexsa1mf",
			"sapin",
			"3000mm x 3000mm",
			"65",
			$client[2]
		],[
			"nodexsa1mf",
			"sapin",
			"3000mm x 3000mm",
			"80",
			$client[2]
		],[
			"nodexsa2mf",
			"sapin",
			"3000mm x 5000mm",
			"25",
			$client[2]
		],[
			"nodexsa2mf",
			"sapin",
			"3000mm x 5000mm",
			"40",
			$client[2]
		],[
			"nodexsa2mf",
			"sapin",
			"3000mm x 5000mm",
			"50",
			$client[2]
		],[
			"nodexsa2mf",
			"sapin",
			"3000mm x 5000mm",
			"65",
			$client[2]
		],[
			"nodexsa2mf",
			"sapin",
			"3000mm x 5000mm",
			"80",
			$client[2]
		],[
			"nodexfr1pv",
			"frêne",
			"1200mm x 1200mm",
			"20",
			$client[0],
			$client[2]
		],[
			"nodexfr1pv",
			"frêne",
			"1200mm x 1200mm",
			"30",
			$client[0],
			$client[2]
		],[
			"nodexfr1pv",
			"frêne",
			"1200mm x 1200mm",
			"40",
			$client[0],
			$client[2]
		],[
			"nodexfr1pv",
			"frêne",
			"1200mm x 1200mm",
			"50",
			$client[0],
			$client[2]
		],[
			"nodexfr1mv",
			"frêne",
			"1800mm x 1800mm",
			"20",
			$client[0],
			$client[2]
		],[
			"nodexfr1mv",
			"frêne",
			"1800mm x 1800mm",
			"30",
			$client[0],
			$client[2]
		],[
			"nodexfr1mv",
			"frêne",
			"1800mm x 1800mm",
			"40",
			$client[0],
			$client[2]
		],[
			"nodexfr1mv",
			"frêne",
			"1800mm x 1800mm",
			"50",
			$client[0],
			$client[2]
		],[
			"nodexfr2mv",
			"frêne",
			"1800mm x 3600mm",
			"20",
			$client[2]
		],[
			"nodexfr2mv",
			"frêne",
			"1800mm x 3600mm",
			"30",
			$client[2]
		],[
			"nodexfr2mv",
			"frêne",
			"1800mm x 3600mm",
			"40",
			$client[2]
		],[
			"nodexfr2mv",
			"frêne",
			"1800mm x 3600mm",
			"50",
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"10",
			$client[0],
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"20",
			$client[0],
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"30",
			$client[0],
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"40",
			$client[0],
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"50",
			$client[0],
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"60",
			$client[0],
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"70",
			$client[0],
			$client[2]
		],[
			"nodexmllib",
			"mélaminé",
			"0mm x 0mm",
			"80",
			$client[0],
			$client[2]
		]
	];
?>

<style>table,td{border:solid black 2px;}</style>

			<table style="margin-top:4%;margin-left:5%;"> 
				<thead>

					<tr>
<?php foreach ($tabs as $tab) { ?>
						<th><?=$tab;?></th>
<?php } ?>
					</tr>

				</thead>
				<tbody>

<?php foreach ($commandes as $commande) { ?>

					<tr>
						<td><?= $commande[0]; ?></td>
						<td><?= $commande[1]; ?></td>
						<td><?= $commande[2]; ?></td>
						<td><?= $commande[3]; ?></td>
						<td><?= $commande[4]; ?></td>
						<td><?= $commande[5]; ?></td>
						<td><?= $commande[6]; ?></td>						
					</tr>
<?php } ?>	
				</tbody>
			</table>