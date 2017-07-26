<?php

class Engine {
    // Properties
    
    /** @var int */
    public $hp;
    
    /** @var string */
    public $energy;
    
    /** @var bool */
    public $isWorking;
    
    /** @var string */
    public $vinNumber;
    
    /** @var string */
    public $manufacturer;
    
    // Constructor
    public function __construct($hp=0, $energy='', $isWorking=false, $vinNumber='', $manufacturer='') {
        $this->hp = $hp;
        $this->energy = $energy;
        $this->isWorking = $isWorking;
        $this->vinNumber = $vinNumber;
        $this->manufacturer = $manufacturer;
    }

}
