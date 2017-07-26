<?php

class Game {
    /**@var string */
    protected $title;
    /**@var int */
    protected $releaseDate;
    /**@var string */
    protected $editor;
    /**@var string */
    protected $genre;

    const CONSOLE_PC        = "PC" ;
    const CONSOLE_SNES      = "SNES" ;
    const CONSOLE_MEGADRIVE = "MEGADRIVE" ;
    const CONSOLE_PS1       = "PlayStation" ;
    const CONSOLE_PS2       = "PS 2" ;
    const CONSOLE_PS3       = "PS 3" ;
    const CONSOLE_PS4       = "PS 4" ;
    const CONSOLE_XBOX_ONE  = "XboxOne" ;

    function __construct(
        $title="",
        $releaseDate=0,
        $editor="",
        $genre=""
    ) {
        $this->title = $title;
        $this->releaseDate = $releaseDate;
        $this->editor = $editor;
        $this->genre = $genre;
    }

    // GETTER
    /**  @return string */
    public function getTitle(){
        return $this -> title;
    }

    // SETTER
    /**  @return string $title */
    public function setTitle($title){
        //validation de la donnée
        if(is_string($title)){
            $this -> title = $title;
        }
    }
}
