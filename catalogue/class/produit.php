<?php

class Produit {
	private $ref;
	private $mat;
	private $long;
	private $larg;
	private $ep;
	private $prix_total;
	private $prix_utile;

	public function __construct($array) {
		$this->ref = $array[0];
		$this->mat = $array[1];
		$this->long = $array[2];
		$this->larg = $array[3];
		$this->ep = array_map("trim", explode(",", $array[4]));
		$this->prix_total = $array[6];
		$this->prix_utile = $array[7];
	}

	public function getRef() {
		$this->ref;
	}

	public function getMat() {
		$this->mat;
	}

	public function getLong() {
		$this->long;
	}

	public function getLarg() {
		$this->larg;
	}

	public function getEp() {
		$this->ep;
	}

	public function getProduit($type) {

		$file = fopen("/home/corentinp/Project_J/.data/db/produits.csv", "r");

		while ($list = fgetcsv($file, 0 , ";")) {
			$prod = array_map("trim", explode(',', $list[5]));
			
			if (in_array($type, $prod)) {
					$items[] = new Produit($list);
			}
		}

		return $items;
	}

	public function html() {
		ob_start();
		require "/home/corentinp/Project_J/catalogue/template/produit.phtml";
		return ob_get_clean();
	}

	public function __toString() {
		return $this->html();
	}

}
?>