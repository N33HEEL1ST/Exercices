<?php

namespace Inc\Classes ;

class VideoGame extends Game implements \JsonSerializable {
    /** @var string */
    protected $genre;
    /** @var string */
    protected $console;
    /** @var float */
    protected $price;

    const CONSOLE_PC = 'PC';
    const CONSOLE_SNES = 'SNES';
    const CONSOLE_MEGADRIVE = 'MegaDrive';
    const CONSOLE_PS1 = 'PlayStation';
    const CONSOLE_PS2 = 'PS2';
    const CONSOLE_PS3 = 'PS3';
    const CONSOLE_PS4 = 'PS4';
    const CONSOLE_XBOX_ONE = 'XboxOne';

    const TVA_RATE = 1.17;

    function __construct(
        $title ="",
        $releaseDate =0,
        $editor ="",
        $genre ="",
        $console ="",
        $price = 0
    ) {
        $this->genre = $genre;
        $this->console = $console;
        $this->price = $price;
        parent::__construct(
            $title,
            $releaseDate,
            $editor
        );
    }


    // GETTER
    /**  @return string */
        // from parent
    public function getTitle(){
        return Game::getTitle();
    }
    public function getReleaseDate(){
        return Game::getReleaseDate();
    }
    public function getEditor(){
        return Game::getEditor();
    }
    public function getGenre(){
        return Game::getGenre();
    }
        // this Class
    public function getConsole(){
        return $this -> console;
    }
    public function getPrice(){
        return floatval($this -> price);
    }


    // SETTER
    /**  @return string $title */
    public function setTitle($title){
        Game::setTitle($title);
    }

    // autre exo !!
    /**
     * @return float
     */
    public function getPriceVatIncluded() {
        return $this->price * self::TVA_RATE;
    }

    // EXO 5 !

    public function jsonSerialize() {
        return array (
            "title" => $this -> getTitle() ,
            "releaseDate" => $this -> getReleaseDate() ,
            "editor" => $this -> getEditor() ,
            "genre" => $this -> getGenre() ,
            "console" => $this -> getConsole(),
            "price" => $this -> getPrice()
        );
    }

    // EXO 6
        // abstract methode from parent(Game)
    public function letStart($parameter) {
        echo "<br/>";
        echo "<br/>";
        echo "This is the beginning of an abstract methode <br/>";
        echo "using the 'echo json_encode' : <br/>";
        echo json_encode($parameter, JSON_PRETTY_PRINT);
    }

        // abstract methode(displayDebutJeu) from parent(Game)
    public function displayDebutJeu($game) {
        echo "<br/><br/>";
        $g = $game -> getTitle() ;
        echo "Le jeuvidéo $g commence maintenant !";
        echo "<br/>";
    }

        // abstract methode(displayFinJeu) from parent(Game)
    public function displayFinJeu($game) {
        echo "<br/><br/>";
        echo "Le jeuvidéo ".$game -> getTitle()." est terminé.";
        echo "<br/>";
    }
}
