<?php
class Client{
	private $nom;
	private $prenom;
	private $id;
	private $adr;
	private $cp;
	private $loc;
	private $type;

	public function __construct($array){
		$this->prenom = $array[0];
		$this->nom    = $array[1];
		$this->id     = $array[2];
		$this->type   = $array[4];
		$this->adr    = $array[5];
		$this->cp     = $array[6];
		$this->loc    = $array[7];
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getId(){
		return $this->id;
	}



	public function getType(){
		return $this->type;
	}

	public function getAdr(){
		return $this->adr;
	}

	public function getCp(){
		return $this->cp;
	}

	public function getLoc(){
		return $this->loc;
	}
}
?>