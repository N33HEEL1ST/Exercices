<pre><?php

// Inclusion des classes (dans l'ordre)
require dirname(__FILE__).DIRECTORY_SEPARATOR.'inc'.DIRECTORY_SEPARATOR.'Vehicle.php';
require dirname(__FILE__).DIRECTORY_SEPARATOR.'inc'.DIRECTORY_SEPARATOR.'Car.php';
require dirname(__FILE__).DIRECTORY_SEPARATOR.'inc'.DIRECTORY_SEPARATOR.'Engine.php';
require dirname(__FILE__).DIRECTORY_SEPARATOR.'inc'.DIRECTORY_SEPARATOR.'Bicycle.php';

// Instance de Vehicle
$vehicleObject = new Vehicle(
    'Blue',
    'Ford',
    'Fiesta',
    true
);
var_dump($vehicleObject);
$vehicleObject->displayToto(); // => TotoVehicle
echo '<br>';

// Instance de Car
$engine = new Engine(
    230,
    'petrol',
    true,
    'MERZRTGRZSTRSTRSZTRS',
    'Mercedes'
);
$mercedes = new Car(
    'Mercedes',
    'Grey',
    $engine,
    true,
    256802,
    '500SL',
    4,
    'MER87987AD987987F556768BC'
);
var_dump($mercedes);
$mercedes->displayToto();// => TotoCarTotoVehicle
echo '<br>';
echo Car::QUESTION.'<br>'; // Vitor

echo $mercedes->getInfos().'<br>';

// EXO 1
$bike = new Bicycle(
    3,
    7,
    'red',
    'Giant',
    'GT787',
    true
);
print_r($bike);

?></pre>