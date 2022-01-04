<?php

$url = "swapi/films.json";
$c = file_get_contents($url);
$c = json_decode(file_get_contents($url));
var_dump($c);


// exemple de code attendu
// $films = new Films();
// $films->affichage();

// $peoples = new Peoples();
// $films->affichage();