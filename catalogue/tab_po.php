<?php 

class tableaux {

	protected $refs;
	protected $matieres;
	protected $longueurs;
	protected $epaisseurs;	

	public function __construct($array) {
		
		$this->refs 	  = $array[0];
		$this->matieres   = $array[1];
		$this->longueurs  = $array[2];
		$this->epaisseurs = $array[3];	
	}

	public function getRefs(){
		return $this->refs;
	}

	public function getMatieres(){
		return $this->matieres;
	}

	public function getLongueurs(){
		return $this->longueurs;
	}

	public function getEpaisseurs(){
		return $this->epaisseurs;
	}

	
}


?>















