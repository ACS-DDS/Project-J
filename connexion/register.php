<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

	<form action="traitementregister.php" method="post">
		<fieldset>
			<legend>Merci d'avoir choisis le Projet-J</legend>
			<table>
				<tr>
					<td><label for="login">*Nom de compte: </label></td>
					<td><input type="text" name="login" placeholder="Nom de compte"/></td>
				</tr>
				<tr>
					<td><label type="text" name="login" id="login"> Entreprise: </label></td>
					<td><input type="text" name="entreprise" placeholder="facultative"/></td>
				</tr>
				<tr>
					<td><label for="mdp">*Mot de passe: </label></td>
					<td><input type="password" name="pass" id="pass" placeholder="Mot de passe"/></td>
				</tr>
				<tr>
					<td><label for="pass2">*Confirmez le mot de passe:</label></td>
					<td><input type="password" name="pass2" id="pass2" placeholder="Confirmez votre mot de passe"></td>
				</tr>
				<tr>
					<td><label for="mail">Adresse Mail: </label></td>
					<td><input type="email" name="mail_personnes" placeholder="Votre e-mail"/></td>
				</tr>
				<tr>
					<td><label for="adresse">Adresse: </label></td>
					<td><input type="text" name="adresse" placeholder="Adresse"/></td>
				</tr>
				<tr>
					<td><label for="cp">Code Postale: </label></td>
					<td><input type="text" name="code_postale" placeholder="code postale"></td>
				</tr>
			</table>
		</fieldset><br>
		<input type="submit" name="register" value="Inscription"/>
	</form>
</body>
</html>