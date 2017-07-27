<?php

namespace Inc\Classes ;

class CardGame extends Game{
    /** @var array of int */
    protected $minimumAge = array(0, 3 , 7 , 12 , 16 , 18, 21);

    function __construct(
        $title ="",
        $releaseDate =0,
        $editor ="",
        $genre ="",
        $console ="",
        $minimumAge = 0
    ) {
        parent::__construct(
            $title,
            $releaseDate,
            $editor,
            $genre,
            $console,
            $minimumAge
        );
    }

    // GETTER
    /**  @return string */
    public function getTitle(){
        return Game::getTitle();
    }

    // SETTER
    /**  @return string $title */
    public function setTitle($title){
        Game::setTitle($title);
    }


    // EXO 6
        // abstract methode from parent(Game)
    public function letStart($parameter) {
        echo "<br/> <br/>";
        echo "Le jeuvidéo #titre commence maintenant !";
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
        $g = $game -> getTitle() ;
        echo "Le jeuvidéo $g est terminé.";
        echo "<br/>";
    }
}
