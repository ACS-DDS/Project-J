<?php 
header('Location: http://corentinp.dijon.codeur.online/Project_J/catalogue/planche.php');
exit;
?>

http://corentinp.dijon.codeur.online/Project_J/catalogue/planche.php

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue - Sur Nodex</title>
</head>
<body>

<?php
session_start();
?>


 <h1>Bienvenue Mr <?= $nom; ?> </h1>

</body>
</html>