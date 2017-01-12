<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="data/styles.css">
	<link rel="stylesheet" type="text/css" href="style_menu.css">
</head>

<body>
<?php include ('../menu_principal.php'); ?>

	<h1>Bienvenue sur Nodex <?php $nom; ?> </h1>
	<h4>Veuillez vous enregistrez</h4>
	<main class="formulaire">
		<form method="post" action="login.php" >
			<table>
				<tr>
					<td><input class="login" type="text" name="login"></td>
				</tr>
				<tr>
					<td><input class="pass" type="password" name="pass"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Connexion"></td>
				</tr>
			</table>
		</form>
	</main>
</body>
</html>