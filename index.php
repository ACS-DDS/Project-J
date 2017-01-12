<?php 
	session_start();

	if(isset($_SESSION["client"])){
		header("Location: http://corentinp.dijon.codeur.online/Project_J/.final/catalogue");
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nodex</title>
	</head>
	<body>
		<h1>Bienvenue chez Nodex</h1>
		<h3>Bonjour, identifiez-vous pour continuer</h3>
		<form action="login" method="post">
			<input type="text" name="login" placeholder="login" value="a.dupont">
			<input type="password" name="password" placeholder="mot de passe" value="beethoven">
			<input type="submit" value="Connexion">
		</form>
	</body>
</html>