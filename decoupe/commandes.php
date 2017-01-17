<?php
class Commandes{
	protected $produits = [];
	protected $reference;
	protected $matiere;
	protected $longueur;
	protected $largeur;
	protected $epaisseur;
	protected $coordonees;
	protected $prix_total;
	protected $prix_utile;

	public function __construct($array){
		$this->produits[] = array(
			$this->reference = $array["reference"],
			$this->matiere   = $array["matiere"],
			$this->longueur  = $array["longueur"],
			$this->largeur   = $array["largeur"],
			$this->epaisseur = $array["epaisseur"]
		);
		$csv = fgetcsv(fopen("../.data/db/produits.csv","r"),0,";");
		$this->prix_total = $csv[6];
		$this->prix_utile = $csv[7];
	}

	public function addProduit($array){
		$this->produits[] = array(
			$this->reference = $array["reference"],
			$this->matiere   = $array["matiere"],
			$this->longueur  = $array["longueur"],
			$this->largeur   = $array["largeur"],
			$this->epaisseur = $array["epaisseur"]
		);
	}

	public function getPrix($array){
		$csv = fgetcsv(fopen("../.data/db/produits.csv","r"),0,";");
		$volumeTotal = ($this->longueur * $this->largeur * $this->epaisseur) / 1000;
		$volumeUtile = (($array["w"] - $array["x"]) * ($array["h"] - $array["y"]) * $this->epaisseur) / 1000;

		$prixTotal = $csv[6];;
		$prixUtile = $csv[7];;

		$prix = ($volumeUtile * $prixUtile) + (($volumeTotal - $volumeUtile) * $prixTotal);

		return round($prix,2) . " €";
	}

	public function getProduits(){
		return $this->produits;
	}

	public function getRef(){
		return $this->reference;
	}

	public function getMat(){
		return $this->matiere;
	}

	public function getLong(){
		return $this->longueur;
	}

	public function getLar(){
		return $this->largeur;
	}

	public function getEpa(){
		return $this->epaisseur;
	}

	public function getDate(){
		return $this->date;
	}

	public function getCoord(){
		return $this->coordonees;
	}

	public function getPrixTotal(){
		$csv = fgetcsv(fopen("../.data/db/produits.csv","r"),0,";");

		return $csv[6];
	}

	public function getPrixUtile(){
		$csv = fgetcsv(fopen("../.data/db/produits.csv","r"),0,";");

		return $csv[7];
	}
}
?>