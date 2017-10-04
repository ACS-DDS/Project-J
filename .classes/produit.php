<?php

class Produit {
	protected $ref;
	protected $mat;
	protected $long;
	protected $larg;
	protected $ep;
	protected $prix_total;
	protected $prix_utile;

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
		$file = fopen(".data/db/produits.csv", "r");

		while($list = fgetcsv($file, 0, ";")){
			$prod = array_map("trim", explode(",", $list[5]));
			
			if(in_array($type,$prod)){
				if($list[0] != "nodexmllib"){
					$items[] = new Produit($list);
				}
				else{
					$items[] = new ProduitLibre($list);
				}
			}
		}
		return $items;
	}

	public function html() {
		ob_start();
		require ".data/tpl/produit.tpl";
		return ob_get_clean();
	}

	public function __toString() {
		return $this->html();
	}
}

class ProduitLibre extends Produit {
	private $inc = 50;
	private $pl = true;

	public function html() {
		ob_start();
		require ".data/tpl/produit.tpl";
		return ob_get_clean();
	}

	public function __toString() {
		return $this->html();
	}
}