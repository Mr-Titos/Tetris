<?php
// On récupere le fichier json pour l'assigner à la variable $json
$json = file_get_contents("score.json");

//Transforme l'objet $json en un tableau PHP
$parsedJson = json_decode($json);

$toSend = "";

foreach ($parsedJson->{'tabScore'} as $key => $value){
	//$toSend = $toSend . $parsedJson->{'tabScore'}[$key]->{'score'}.'/';
	
	
}

echo "$toSend";

?>