<?php

class Vehicle {
    /** @var string */
    public $color;
    
    /** @var string */
    protected $brand;
    
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

}
