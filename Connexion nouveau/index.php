<?php require 'inc/header.php'; ?>

<?php 
	if (isset($_SESSION['clients'])) {
	header('Location: index.php');
	exit;
	}
?>

	<article>
	<h1>Bienvenue sur Nodex </h1>
		<h4>Veuillez vous enregistrez</h4>
	</article>
	<main class="formulaire">
		<form action="login.php" method="post">
			<div>
				<label for="">Compte</label>
				<input type="text" name="mail" class="form-control">
			</div>
			<div>
				<label for="" >Mot de passe</label>
				<input type="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Me connecter</button><br>
		</form>
		<button type="submit" class="btn btn-primary">Mot de passe oubliée</button>
	</main>




<?php require 'inc/footer.php'; ?>