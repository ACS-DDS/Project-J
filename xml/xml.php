<?php require_once("../connexion/class/clients.php");require("../connexion/controle.php");
// 10-100, 100-10, 10-10, 100-100
header("Content-type: text/xml");

if(!isset($_SESSION["commandes"])) : 
	$_SESSION["commandes"] = array(
		array(
			"{{zero}}",
			"{{un}}",
			"{{deux}}",
			"{{trois}",
			"{{quatre}}",
			"{{cinq}}",
			"{{six}}"
		),
		array(
			"{{reference}}",
			"{{matiere}}",
			"{{longueur}}",
			"{{largeur}",
			"{{epaisseur}}",
			"{{prix}}",
			"{{coordonees}}"
		)
	);
endif;

$xml = new SimpleXMLElement("<nodex/>");

$groupe = $xml->addChild("groupe");

$groupe->addChild("membres","corentinp, nabilb, clements, yassinl, walidb");
$groupe->addChild("name","Project_J");

$client = $xml->addChild("client");

$client->addChild("prenom",$_SESSION["client"]->getPrenom());
$client->addChild("nom",$_SESSION["client"]->getNom());
$client->addChild("adresse",$_SESSION["client"]->getAdr());
$client->addChild("code-postal",$_SESSION["client"]->getCp());
$client->addChild("location",$_SESSION["client"]->getLoc());

$commandes = $xml->addChild("commandes");

// foreach
foreach($_SESSION["commandes"] as $produits) : 
	$produit = $commandes->addChild("produit");

	$produit->addChild("reference",$produits[0]);
	$produit->addChild("matiere",$produits[1]);
	$produit->addChild("longueur",$produits[2]);
	$produit->addChild("largeur",$produits[3]);
	$produit->addChild("epaisseur",$produits[4]);
	$produit->addChild("prix",$produits[5]);
	$produit->addChild("date",time());

	$decoupe = $produit->addChild("decoupe");
	$decoupe->addChild("coordonees",$produits[6]);
endforeach;

$total = $xml->addChild("total");

$total->addChild("commandes",count($_SESSION["commandes"]));
//$total->addChild("prix","10" . "€");

/*$xml->saveXML("../.data/xml/" . $_SESSION["client"]->getId() . "-" . time() . ".xml");*/

print($xml->asXML());