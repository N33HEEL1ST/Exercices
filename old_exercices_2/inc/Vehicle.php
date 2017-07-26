<?php

class Vehicle {
    // Les Properties !

    /** @var string */
    public $color ;

    /** @var string */
    public $brand ;

    /** @var string */
    public $model ;

    /** @var bool */
    public $isWorking ;


    function __construct(
        $color      =   "" ,
        $brand      =   "" ,
        $model      =   "" ,
        $isWorking  =   false
    ) {
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
        $this->isWorking = $isWorking;
    }

    public function displayToto(){
        echo "</br>TotoVehicle</br>";
    }

}
