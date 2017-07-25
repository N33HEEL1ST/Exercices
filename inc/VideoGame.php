<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VideoGame
 *
 * @author Etudiant
 */
class VideoGame {
    /**@var string */
    public $title;
    /**@var int */
    public $releaseDate;
    /**@var string */
    public $editor;
    /**@var string */
    public $genre;
    /**@var string */
    public $console;

    const CONSOLE_PC        = "PC" ;
    const CONSOLE_SNES      = "SNES" ;
    const CONSOLE_MEGADRIVE = "MEGADRIVE" ;
    const CONSOLE_PS1       = "PlayStation" ;
    const CONSOLE_PS2       = "PS 2" ;
    const CONSOLE_PS3       = "PS 3" ;
    const CONSOLE_PS4       = "PS 4" ;
    const CONSOLE_XBOX_ONE  = "XboxOne" ;

    function __construct($title, $releaseDate, $editor, $genre, $console) {
        $this   ->  title        = $title;
        $this   ->  releaseDate  = $releaseDate;
        $this   ->  editor       = $editor;
        $this   ->  genre        = $genre;
        $this   ->  console      = $console;
    }

    /** @param string $change */
    public function change($change){
        $this   ->  title = $change;
    }

    // GETTER
    /**  @return string */
    public function getBrand(){
        return $this -> brand;
    }

    // SETTER
    /**  @return string $brand */
    public function setBrand($brand){
        //validation de la donnée
        if(is_string($brand)){
            $this -> brand = $brand;
        }
    }
    public function setVinNumber($vinNumber){
        if (is_string($vinNumber)){
            $this -> vinNumber = $vinNumber;
        }
    }
    private function setStringProperty($propertyName, $value){
        if (is_string($value)){
            $this->$propertyName = $value;
        }
    }
}
