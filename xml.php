<?php
require_once(".classes/clients.php");
require_once(".classes/commandes.php");
require(".data/php/controle.php");

header("Content-type: text/xml");

$xml = new SimpleXMLElement("<nodex/>");

$groupe = $xml->addChild("groupe");

$groupe->addChild("membres", "corentinp, nabilb, clementd, yassinl, walidb, zohral");
$groupe->addChild("name", "Project_J");

$client = $xml->addChild("client");

$client->addChild("prenom", $_SESSION["client"]->getPrenom());
$client->addChild("nom", $_SESSION["client"]->getNom());
$client->addChild("adresse", $_SESSION["client"]->getAdr());
$client->addChild("code-postal", $_SESSION["client"]->getCp());
$client->addChild("location", $_SESSION["client"]->getLoc());

$commandes = $xml->addChild("commandes");

// foreach
foreach($_SESSION["commandes"]->getProduits() as $produits) : 
  $produit = $commandes->addChild("produit");

  $produit->addChild("reference", $produits[0]);
  $produit->addChild("matiere", $produits[1]);
  $produit->addChild("longueur", $produits[2]);
  $produit->addChild("largeur", $produits[3]);
  $produit->addChild("epaisseur", $produits[4]);
  $produit->addChild("date", time());

  $decoupe = $produit->addChild("decoupe");
  $decoupe->addChild("coordonees", $_POST["x"] . "-" . $_POST["y"] . ", " . $_POST["y"] . "-" . $_POST["w"] . ", " . $_POST["w"] . "-" . $_POST["h"] . ", " . $_POST["h"] . "-" . $_POST["x"]);
endforeach;

$total = $xml->addChild("total");

$total->addChild("commandes",count($_SESSION["commandes"]));
$total->addChild("prix", $_SESSION["commandes"]->getPrix($_POST));

$xml->saveXML(".data/xml/" . $_SESSION["client"]->getId() . "-" . time() . ".xml");

print($xml->asXML());

unset($_SESSION["commandes"]);

header("Location: ./");