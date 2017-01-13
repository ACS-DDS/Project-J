<?php require 'inc/header.php';?>


<?php

		/* 
		*Condition Si le champ est 
		*vide ou invalide  
		*alors->erreurs 
		*********************/
	if(!empty($_POST)){ 
	// Si le champ est pas vide

	$fails = array();
	/* 
	*Si pas d'erreurs alors rien
	****/

		if(empty($_POST['username']) || !preg_match('/[a-zA-Z0-9_]+$/',$_POST['username'])) 
			{
			$fails['username'] = "Verifier bien le champ pseudo";
			}
			/**
			*Fin de la  
			*validation
			*UserName
			*****/
		if (empty($_POST['mail']) || !preg_match("/^[^@]{1,255}$/",$_POST['mail']))
			{
			$fails['mail'] = "Rentrez votre mail correctement merci.";
			return false;
			}

		if (empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
			$fails['password'] ="Mot de passe incompatible ou incorrect.";
		}
		// je dump mon travail
		debug($fails);
	}	
?>

	<h1>NodeX - Join Us</h1>

	<form action="" method="POST">
		<div class="form-group">
			<label for="" >Login</label>
			<input type="text" name="username" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="" >Mail</label>
			<input type="text" name="mail" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="" >Mot de passe</label>
			<input type="password" name="password" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="" >Confirme votre mos de passe</label>
			<input type="password" name="password_confirm" class="form-control"/>
		</div>

		<button type="submit" class="btn btn-primary"> M'inscrire</button>
	</form>

<?php require 'inc/footer.php';?>