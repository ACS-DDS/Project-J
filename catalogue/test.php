<?php 
session_start();
require 'tab_po.php';

$csv = fopen('../.data/db/produits.csv', 'r');
$data = fgetcsv($csv, 0, ';');

$ligne = new tableaux($data);

echo $ligne->getRefs().'  '.$ligne->getMatieres();

?>