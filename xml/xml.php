<?php require_once("../connexion/class/clients.php");require("../connexion/controle.php");
// {{10-100,100-10,10-10,100-100}}
header("Content-type: text/xml");

$xml = new SimpleXMLElement("<xml/>");

$nodex = $xml->addChild("nodex");
$client = $nodex->addChild("client");
$nom = $client->addChild("nom",$_SESSION["client"]->getNom());
$prenom = $client->addChild("prenom",$_SESSION["client"]->getPrenom());
$id = $client->addChild("id",$_SESSION["client"]->getId());

$commandes = $nodex->addChild("commandes");

// foreach
$produit = $commandes->addChild("produit");
$reference = $produit->addChild("reference",$_SESSION["commandes"]->getRef());
$matiere = $produit->addChild("matiere",$_SESSION["commandes"]->getMat());
$longueur = $produit->addChild("longueur",$_SESSION["commandes"]->getLong());
$largeur = $produit->addChild("largeur",$_SESSION["commandes"]->getLar());
$epaisseur = $produit->addChild("epaisseur",$_SESSION["commandes"]->getEpa());
$date = $produit->addChild("date",time());
$decoupe = $produit->addChild("decoupe");
$coordonees = $decoupe->addChild("coordonees",$_SESSION["commandes"]->getCoord());

$xml->saveXML("" . $_SESSION["client"]->getId() . "-" . time() . ".xml");

print($xml->asXML());