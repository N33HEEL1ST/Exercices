<?php

class Bicycle extends Vehicle {
    // Properties
    public $numberOfSprockets;
    public $numberOfGears;
    
    public function __construct($numberOfSprockets=0, $numberOfGears=0, $color='', $brand='', $model='', $isWorking=false) {
        $this->numberOfSprockets = $numberOfSprockets;
        $this->numberOfGears = $numberOfGears;
        // Appel contructeur parent
        parent::__construct($color, $brand, $model, $isWorking);
    }

}
