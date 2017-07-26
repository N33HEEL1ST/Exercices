<?php

namespace Core\WebForce3 ;

class VideoGame extends Game {
    protected $console ;

    function __construct(
        $title ="",
        $releaseDate =0,
        $editor ="",
        $genre ="",
        $console =""
    ) {
        parent::__construct(
            $title,
            $releaseDate,
            $editor,
            $genre,
            $console
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
}
