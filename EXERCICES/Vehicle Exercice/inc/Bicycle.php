<?php

namespace Inc;

class Bicycle extends Vehicle {
    // Properties

    /** @var string */
    public $gender;

    /** @var int */
    public $numberOfSprockets;

    /** @var int */
    public $numberOfGear;

    // Surcharge / Override de la propriété statique
    public static $validColors = array(
        'blue',
        'black',
        'red',
        'white',
        'grey'
    );


    // constructeur
    function __construct(
        $gender="",
        $numberOfSprockets=0,
        $numberOfGear=0,
        $color='',
        $brand='',
        $model='',
        $isWorking=false
    ) {
        $this   ->  gender = $gender;
        $this   ->  numberOfSprockets = $numberOfSprockets;
        $this   ->  numberOfGear = $numberOfGear;

        parent::__construct(
            $color,
            $brand,
            $model,
            $isWorking
        );
    }
// IMPLEMENTED FROM PARENT ABSTRACT CLASS
    public static function isValidColor($color) {
        return in_array($color, self::$validColors);
    }
}
