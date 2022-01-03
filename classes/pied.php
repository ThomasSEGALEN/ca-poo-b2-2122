<?php

class Pied {

    public function __construct(
        $hauteur,
        $largeur,
        $couleur,
        $materiaux,
        $inclinaison,
        $nb_pieds
    ) {
        $this->hauteur = $hauteur;
        $this->largeur = $largeur;
        $this->couleur = $couleur;
        $this->materiaux = $materiaux;
        $this->inclinaison = $inclinaison;
        $this->nb_pieds = $nb_pieds;
    }

    public function printHauteur() {
        echo($this->hauteur);
    }

} 