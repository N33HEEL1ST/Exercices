<?php

namespace Inc;
use Exception; // car sinon on arrive pas a exceder a cette classe (qui se trouvais dans le root; i think) !

// Extends = hérite des propriétés et méthodes de XXX
class Car extends Vehicle implements RegisteredVehicle {
    // Properties

    /** @var Engine */
    public $engine ;

    /** @var int */
    public $nbWheels ;

    /** @var string */
    public $vinNumber ;

    /** @var int */
    public $mileage ;

    /** @var int */
    public $firstCirculationDate ; //date de la 1ere mise en circulation

    /** @var string */
    public $licensePlate ;

    // Constructor => define value for each property
    public function __construct(
        $brand='',
        $color='',
        $engine=null,
        $isWorking=false,
        $mileage=0,
        $model='',
        $nbWheels=0,
        $vinNumber='',
        $firstCirculationDate = 0,
        $licensePlate = ""
    ) {
        //$this->brand = $brand;    // those properties belong now to Parent - Vehicle
        //$this->color = $color;    // those properties belong now to Parent - Vehicle
        $this->engine = $engine;
        //$this->isWorking = $isWorking;    // those properties belong now to Parent - Vehicle
        $this->mileage = $mileage;
        //$this->model = $model;    // those properties belong now to Parent - Vehicle
        $this->nbWheels = $nbWheels;
        $this->vinNumber = $vinNumber;
        $this->firstCirculationDate = $firstCirculationDate;
        $this->licensePlate = $licensePlate;

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

    //
    //
    // IMPLEMENTED METHODS
    public function register($licensePlate) {
        if (preg_match(RegisteredVehicle::LICENSE_PLATE_PATTERN, $licensePlate) === 1){
            $this->licensePlate = $licensePlate;
        }
        else {
            // sinon , je lève une exception
            throw new Exceptions\LicensePlateFormatException();
        }
    }

    public function firstRegistered() {
        $this->firstCirculationDate = time();
    }

    // pour avoir la methode abstract du parent ! on fait :
    // netbeans -> alt + instert -> override and implement methode
    public function isValidColor($color) {
        $validColors = array(
            "blue",
            "white",
            "grey"
        );
        return in_array($color, $validColors);
    }
}
