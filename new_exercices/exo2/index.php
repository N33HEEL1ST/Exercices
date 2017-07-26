<?php


// // Include Car.php File
// require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."Game.php" ;
// require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."VideoGame.php" ;
// require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."CardGame.php" ;

// // AUTOLOAD : mise en route du chargement automatique des classes
// spl_autoload_register(
//     function($className){
//         echo "</br> --------- AUTOLOAD --------- "." $className </br>";
//         require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR.$className.".php" ;
//     }
// );

// Mise en route du chargement automatque (PSR-4) des classes
spl_autoload_register();

// chercher les namespaces
use Inc\Classes\VideoGame as VideoGame ;
use Inc\Classes\CardGame as CardGame ;
use Inc\Classes\Game as Game ;

$game_nba_2K16 = new VideoGame(
    "NBA 2K16", //$title="",
    2016, //$releaseDate=0,
    "E.A.", //$editor="",
    "Sports", //$genre="",
    "PC"  //$console=""
);
echo "<pre>" ;
var_dump($game_nba_2K16) ;
echo "</pre>" ;

// exo 2 *1
echo "<pre>" ;
$result = $game_nba_2K16->getTitle() ;
print_r($result);
echo "</pre>" ;

// exo 2 *2
echo "<pre>" ;
$result = $game_nba_2K16->setTitle("new NBA 2K16") ;
print_r($result);
echo "</pre>" ;

// exo 2 *3
echo "<pre>" ;
$result = $game_nba_2K16->getTitle() ;
print_r($result);
echo "</pre>" ;
