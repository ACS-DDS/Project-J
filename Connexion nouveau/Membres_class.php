<?php
/**
* Listes de clients 
*/
class Membres {
	private $nom;
	private $prenom;
	private $type;

public function __construct($array){
	$this->nom = $array[0];
	$this->prenom = $array[3];
	$this->type = $array[4];
	}

	public function Genre(){
		return $this->type;
	}

	public function getNom() {
		return $this->nom;
	}
	public function type(){
		$this->type;
	}
}