<?php

require ("/home/corentinp/Project_J/.data/db/produits.csv");

class Produit {
	private $ref;
	private $mat;
	private $long;
	private $larg;
	private $ep;

	public function __construct($array) {
		$this->ref = $array[0];
		$this->mat = $array[1];
		$this->long = $array[2];
		$this->larg = $array[3];
		$this->ep = array_map("trim", explode(",", $array[4]));
	}

	public function show() {
		ob_start();
		require ("/home/corentinp/Project_J/connexion/template/produit.phtml");
		return ob_get_clean();
	}



}

?>