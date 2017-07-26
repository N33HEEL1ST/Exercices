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
class VideoGameBis {
    /**@var string */
    private $title;
    /**@var int */
    private $releaseDate;
    /**@var string */
    private $editor;
    /**@var string */
    private $genre;
    /**@var string */
    private $console;

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

    //
    // GETTER
    /**  @return string */
    public function getTitle(){
        return $this -> title;
    }
    /**  @return int */
    public function getReleaseDate(){
        return $this -> releaseDate;
    }
    /**  @return string */
    public function getEditor(){
        return $this -> editor;
    }
    /**  @return string */
    public function getGenre(){
        return $this -> genre;
    }
    /**  @return string */
    public function getConsole(){
        return $this -> console;
    }

    //
    // SETTER
    /**  @return string  */
    public function setTitle($title){
        //validation de la donnée
        if(is_string($title)){
            $this -> title = $title;
        }
    }
    /**  @return int  */
    public function setReleaseDate($releaseDate){
        //validation de la donnée
        if(is_integer($releaseDate)){
            $this -> releaseDate = $releaseDate;
        }
    }
    /**  @return string  */
    public function setEditor($editor){
        //validation de la donnée
        if(is_string($editor)){
            $this -> editor = $editor;
        }
    }
    /**  @return string  */
    public function setGenre($genre){
        //validation de la donnée
        if(is_string($genre)){
            $this -> genre = $genre;
        }
    }
    /**  @return string  */
    public function setConsole($console){
        //validation de la donnée
        if(is_string($console)){
            $this -> console = $console;
        }
    }
}
