<?php
// Je crée une function qui va m'afiché la valeur de ma variable et je veut que sa me retourne le resultat 
// Je ferme pas ma function.php comme php va executer que du php ici 

function debug($variable){

	echo"<pre>" .print_r($variable, true) .'</pre>';
}