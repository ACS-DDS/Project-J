<?php

class Client{
	private $prenom;
	private $nom;
	private $type;

	public function __construct($array){
		$this->prenom = $array[0];
		$this->nom = $array[1];
		$this->type = $array[4];
	}
	
	public function getType() {
		return $this->type;
	}
}
?>
