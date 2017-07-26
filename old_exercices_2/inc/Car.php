<?php

class Car extends Vehicle {
    // Properties
    /** @var string */
    public $engine ;

    /** @var int */
    public $mileage ;

/** @var int */
public $nbWheels ;

    /** @var string */
    public $vinNumber ;

    // Constructor
    public function __construct(
        $engine     =   null ,
        $nbWheels   =   0 ,
        $mileage    =   0 ,
        $vinNumber  =   "",
        $color,
        $brand,
        $model,
        $isWorking
    ){
        $this   ->  engine      = $engine;
        $this   ->  mileage     = $mileage;
        $this   ->  nbWheels    = $nbWheels;
        $this   ->  vinNumber   = $vinNumber;

        // appel de la méthode du parent
        parent::__construct(
            $color,
            $brand,
            $model,
            $isWorking
        );
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
    
    public function displayToto() {
        echo "</br>TotoCar</br>";
    }

}
