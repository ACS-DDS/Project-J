<?php

$folder = fopen('clients.csv', 'r');
$data = fgetcsv($folder,0, ';');

var_dump($data);