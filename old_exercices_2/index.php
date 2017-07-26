<?php

// Include Car.php File
require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."Vehicle.php" ;
require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."Car.php" ;
require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."Engine.php" ;

// instanciate the class "car"
// $hp , $energy , $isWorking , $vinNumber , $manufacturer
$engine = new Engine(
    200,
    "petrol",
    true,
    "MER99999",
    "Mercedes"
);


// Instanciate the class "Car"
// $brand , $color , $engine , $isWorking , $mileage , $model , $nbWheels , $vinNumber
$mercedes = new Car(
    "Mercedes",
    "Grey",
    $engine,
    true,
    256802,
    "500SL",
    4,
    "MER0123456789"
);

echo "<pre>" ;
echo "  ---  This is the mercedes : </br>";
var_dump($mercedes) ;
echo "</pre>" ;

// unset($mercedes); call __destruct() automatically

//
//
// new Car (bmw)
$bmw    =   new Car();
$bmw    ->  brand       = "BMW" ;
$bmw    ->  color       = "black" ;
$bmw    ->  engine      = new Engine(
                                120,
                                "Diesel",
                                true,
                                "BMW9999",
                                "BMW"
                        );
$bmw    ->  isWorking   = true ;
$bmw    ->  mileage     = 100000 ;
$bmw    ->  model       = "320d" ;
$bmw    ->  nbWheels    = 4 ;
$bmw    ->  vinNumber   = "BMW9999" ;

echo "<pre>" ;
echo "  ---  This is the bmw : </br>";
var_export($bmw) ;
echo "</pre>" ;


// accéder aux valeurs des propriété
echo "</br></br>La voiture ".$bmw->brand." est de couleur ".$bmw->color."</br>";

// TEST methode paint
$bmw ->paint("pearl black");

// Appel à une methode
echo $bmw->getInfos()."</br>";

// appel test function
$mercedes -> displayToto();
