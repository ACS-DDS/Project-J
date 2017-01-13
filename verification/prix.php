<?php
class Prix{
	private $prix;

	public function __construct($array){
		$this->prix = $array[6] + $array[7]; 
	}

	public function getPrix(){
		return $this->prix;
	}
}
?>