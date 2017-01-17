<?php

$volumeTotal = $_SESSION["commandes"]->getLong() * $_SESSION["commandes"]->getLarg() * $_SESSION["commandes"]->getEpa();
$volumeUtile = ($_POST["w"] - $_POST["x"]) * ($_POST["h"] - $_POST["y"]) * $_SESSION["commandes"]->getEpa();

$prixTotal = $_SESSION["commandes"]->getPrixTotal();
$prixUtile = $_SESSION["commandes"]->getPrixUtile();

$prix = ($volumeUtile * $prixUtile) + (($volumeTotal - $volumeUtile) * $prixTotal);

?>