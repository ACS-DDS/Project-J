<?php

session_start();

class Prix{
	private $prix;
	private $L;
	private $l;
	private $h;


	public function __construct($array){
		foreach ($_SESSION["commandes"] as $cmd) {
			$this->L = $cmd[2];
			$this->l = $cmd[3];
			$this->h = $cmd[4];
		}
	}

	public function getPrix(){

		return $this->prix;
	}
}
?>