<?php

class Car {
    // Les Properties !

    /** @var string */
    public $color ;

    /** @var string */
    public $brand ;

    /** @var string */
    public $engine ;

    /** @var int */
    public $nbWheels ;

    /** @var string */
    public $vinNumber ;

    /** @var string */
    public $model ;

    /** @var int */
    public $mileage ;

    /** @var bool */
    public $isWorking ;

    // Constructor
    public function __construct(
            $brand      =   "" ,
            $color      =   "" ,
            $engine     =   null ,
            $isWorking  =   false ,
            $mileage    =   0 ,
            $model      =   "" ,
            $nbWheels   =   4 ,
            $vinNumber  =   ""
            ){
        $this   ->  brand       = $brand;
        $this   ->  color       = $color;
        $this   ->  engine      = $engine;
        $this   ->  isWorking   = $isWorking;
        $this   ->  mileage     = $mileage;
        $this   ->  model       = $model;
        $this   ->  nbWheels    = $nbWheels;
        $this   ->  vinNumber   = $vinNumber;
    }

    // Destructor - useless
    public function __destruct() {
        echo "destruct" ;
    }

    /** @return string */
    public function getInfos(){
        return "La voiture est de la marque ".$this->brand." et de la couleur ".$this->color ;
    }
    
    /** @param string $newColor */
    public function paint($newColor){
        $this   ->  color = $newColor;
    }

}
