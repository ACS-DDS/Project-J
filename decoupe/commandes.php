<?php
require_once("../connexion/class/clients.php");

class Commandes{
	protected $produit;
	protected $reference;
	protected $matiere;
	protected $longueur;
	protected $largeur;
	protected $epaisseur;
	protected $date;
	protected $coordonees;
	protected $types = [];
	protected $me;

	public function __construct($array){
		$this->produit = array(
			$this->reference = $array[0],
			$this->matiere = $array[1],
			$this->longueur = $array[2],
			$this->largeur = $array[3],
			$this->epaisseur = $array[4],
			$this->date = (string)time(),
			$this->coordonees = $array[5]
		);
	}

	public function getProduits(){
		return array($this->produit);
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