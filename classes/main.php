<?php

include_once('classes/datas.php');

include_once('classes/film.php');
include_once('classes/people.php');
include_once('classes/planet.php');
include_once('classes/specie.php');
include_once('classes/starship.php');
include_once('classes/vehicle.php');

class Main {

    public $films = [];
    public $peoples = [];
    public $planets = [];
    public $species = [];
    public $starships = [];
    public $vehicles = [];

    public function __construct() {
        $this->datas = new Datas();
        $this->run();
        echo($this->films[0]);
        echo($this->peoples[0]);
        echo($this->planets[0]);
        echo($this->species[0]);
        echo($this->starships[0]);
        echo($this->vehicles[0]);
    }

    private function run() {
        $this->runFilms();
        $this->runPlanets();
        $this->runPeoples();
        $this->runSpecies();
        $this->runStarships();
        $this->runVehicles();
    }

    private function runFilms() {
        $films_datas = $this->datas->get_content("films");
        foreach ($films_datas as $film_datas) {
            $this->films[] = new Film($film_datas);
        }
    }

    private function runPlanets() {
        $planets_datas = $this->datas->get_content("planets");
        foreach ($planets_datas as $planet_datas) {
            $this->planets[] = new Planet($planet_datas);
        }
    }

    private function runPeoples() {
        $peoples_datas = $this->datas->get_content("people");
        foreach ($peoples_datas as $film_datas) {
            $this->peoples[] = new People($film_datas);
        }
    }

    private function runSpecies() {
        $species_datas = $this->datas->get_content("species");
        foreach ($species_datas as $film_datas) {
            $this->species[] = new Specie($film_datas);
        }
    }

    private function runStarships() {
        $starships_datas = $this->datas->get_content("transport");
        foreach ($starships_datas as $film_datas) {
            $this->starships[] = new Starship($film_datas);
        }
    }

    private function runVehicles() {
        $vehicles_datas = $this->datas->get_content("vehicles");
        foreach ($vehicles_datas as $film_datas) {
            $this->vehicles[] = new Vehicle($film_datas);
        }
    }

}