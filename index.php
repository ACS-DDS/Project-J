<?php
	session_start();

	if(isset($_SESSION["client"])){
		header("Location: http://corentinp.dijon.codeur.online/.final/catalogue");
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Nodex</title>

		<link rel="stylesheet" type="text/css" href=".data/css/styles.css">
	</head>
	<body>
		<h1>Nodex</h1>
		<h3>Identification requise</h3>
		<form action="login" method="post">
			<input type="text" name="login" placeholder="Login">
			<input type="password" name="password" placeholder="Mot de passe">
			<input type="submit" value="Connexion">
		</form>
		<?php
			if(isset($_SESSION["msg"])){
				foreach($_SESSION["msg"] as $message) : 
					echo $message;
				endforeach;
				unset($_SESSION["msg"]);
			}
		?>
	</body>
</html>