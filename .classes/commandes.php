<?php
class Commandes{
	protected $produits = [];
	protected $reference;
	protected $matiere;
	protected $longueur;
	protected $largeur;
	protected $epaisseur;
	protected $coordonees;

	public function __construct($array){
		$this->produits[] = array(
			$this->reference = $array["reference"],
			$this->matiere   = $array["matiere"],
			$this->longueur  = $array["longueur"],
			$this->largeur   = $array["largeur"],
			$this->epaisseur = $array["epaisseur"]
		);
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
}
?>