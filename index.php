<?php

include_once('classes/pied.php');

$pied = new Pied(10, 10, "rouge", "bois", 0, 13);
echo($pied->hauteur);
echo($pied->largeur);
$pied->printHauteur();