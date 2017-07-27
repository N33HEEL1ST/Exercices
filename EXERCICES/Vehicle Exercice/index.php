<pre><?php

// Mise en route du chargement automatique (PSR-4) des classes
spl_autoload_register();

// J'importe les classes que j'utilise
use Inc\Engine;
use Inc\Car;
use Inc\Vehicle;
use Inc\Bicycle;

// Instanciate a Car
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

// Utilisation des méthodes de l'interface
$mercedes->firstRegistered();
$mercedes->register('ET-4578');

// un exemple d'erreur !
try {
    $mercedes->register('ET4578sfhgfsdh');
}
catch (Inc\Exceptions\LicensePlateFormatException $e) {
    echo 'Format de la plaque incorrect<br/>';
    echo '<br/>';
}
catch (Exception $e) {
    echo 'Error : '.$e->getMessage().'<br>';
}

var_dump($mercedes);

// ******************
// abstract methods :
echo "<br />";
echo "<br />";
echo "$ bike :";
echo "<br />";
$bike = new Bicycle(
    3,
    7,
    'red',
    'Giant',
    'GT787',
    true
);

var_dump($bike);

// tests des methodes abstract :
print_r($bike);
$validColor = $bike->isValidColor('white');
var_dump($validColor); // false
$validColor2 = $bike->isValidColor('pink');
var_dump($validColor2); // true

// ****************
// Static properities / methodes :
print_r($mercedes::$validColors); // :: => Paamayim Nekudotayim
print_r($bike::$validColors);

?></pre>
