<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>


<?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
<?php endif; ?>

<main>
		<h1> <center> Détails aprés connexion </center></h1>
	<div id="connexion">
		<fieldset>
			<legend>Connexion requise</legend>
			<form method="get" action="traitementlogin.php">
				<label>Qui êtes-vous</label>
				<select size="3"> 
					<optgroup label="Choix" nom="choix">
						<option value="Particulier" value="1">Gros</option>
						<option value="Entrepreneur" value="2">Luxe</option>
						<option value="Renseignement" value="3">Standard</option>
					</optgroup>
				</select>
				<div class="connexion">
					<input type="text" name="mail" placeholder="Adresse mail">
					<input type="password" name="pass" placeholder="Mot de passe">
					<button action="traitementlogin.php">Connexion</button>
				</div>
			</form>
			<button href="register.php"> Inscription </button>

		</fieldset>
	</div>
	<h2> <center> Si vous n'avais pas de compte veillez vous enregistrer. <a href="register.php">cliquez ici pour vous inscrire.</a>  </center></h2>

</main>


</body>
</html>