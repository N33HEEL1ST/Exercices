<?php

// Extends = hérite des propriétés et méthodes de XXX
class Car extends Vehicle {
    // Properties
    
    /** @var Engine */
    public $engine;
    
    /** @var int */
    public $nbWheels;
    
    /** @var string */
    public $vinNumber;
    
    /** @var int */
    public $mileage;
    
    // Constructor => define value for each property
    public function __construct($brand='', $color='', $engine=null, $isWorking=false, $mileage=0, $model='', $nbWheels=0, $vinNumber='') {
        //$this->brand = $brand;
        //$this->color = $color;
        $this->engine = $engine;
        //$this->isWorking = $isWorking;
        $this->mileage = $mileage;
        //$this->model = $model;
        $this->nbWheels = $nbWheels;
        $this->vinNumber = $vinNumber;
        
        // Appel de la méthode du parent
        parent::__construct($color, $brand, $model, $isWorking);
    }
    
    // Destructor - useless
    public function __destruct() {
        echo 'destruct '.$this->brand.'<br>';
    }
    
    // surcharge - overload
    public function displayToto() {
        echo 'TotoCar';
        parent::displayToto();
        echo 'fini';
    }
    
    /**
     * 
     * @return string
     */
    public function getInfos() {
        return 'La voiture est de marque '.$this->brand.' et de couleur '.$this->color;
    }
    
    /**
     * 
     * @param string $newColor
     */
    public function paint($newColor) {
        $this->color = $newColor;
    }
    
    // GETTER
    
    /**
     * @return string
     */
    public function getBrand() {
        return $this->brand;
    }
    
    // SETTER
    
    /**
     * @param string $brand
     */
    public function setBrand($brand) {
        // Validation de la donnée
        if (is_string($brand)) {
            $this->brand = $brand;
        }
    }
}
