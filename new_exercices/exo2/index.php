<?php


// Include Car.php File
require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."Game.php" ;
require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."VideoGame.php" ;
require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."CardGame.php" ;

// chercher les namespaces
use Core\WebForce3\VideoGame as VideoGame ;
use Core\WebForce3\CardGame as CardGame ;
use Core\WebForce3\Game as Game ;

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
