<?php

// $this , c'est la proprieté??? courrante
// self::  , c'est la class courrante
// parent:: , c'est le parent de la class courrante

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

    // Je définis une propriété statique
    public static $validColors = array();

    const QUESTION = 'Vitor';

    public function __construct($color='', $brand='', $model='', $isWorking=false) {
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
        $this->isWorking = $isWorking;
    }

    public static function displayToto() {
        echo 'TotoVehicle';
    }

    // Déclaration d'une méthode abstraite
    // Chaque enfant doit obligatoirement l'implémenter
    public abstract static function isValidColor($color);
}
