<?php

class Bicycle extends Vehicle {
    // Properties

    /** @var string */
    public $gender;

    /** @var int */
    public $numberOfSprockets;

    /** @var int */
    public $numberOfGear;


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



}
