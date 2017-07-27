<?php

namespace Inc;

// si on veut crée une methode (function) qui soit abstract , la class doit etre obligatoirement abstract
abstract class Vehicle {
    /** @var string */
    public $color;

    /** @var string */
    public $brand;

    /** @var string */
    public $model;

    /** @var bool */
    public $isWorking;

    const QUESTION = 'Vitor';

    public function __construct($color='', $brand='', $model='', $isWorking=false) {
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
        $this->isWorking = $isWorking;
    }

    public function displayToto() {
        echo 'TotoVehicle';
    }

    // Déclaration d'une méthode abstraite
    // Chaque enfant doit obligatoirement l'implémenter
    public abstract function isValidColor($color);
}
