<?php

namespace Inc\Classes ;

abstract class Game {
    /**@var string */
    protected $title;
    /**@var int */
    protected $releaseDate;
    /**@var string */
    protected $editor;
    /**@var string */
    protected $genre;
    /** @var int */
    protected $minimumAge;

    // Static properties
    public static $babyMaxAge = 2;
    public static $childMaxAge = 11;
    public static $teenagerMaxAge = 17;
    public static $adultMaxAge = 59;
    public static $seniorMaxAge = 127;

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
        $genre="",
        $minimumAge=0
    ) {
        $this->title = $title;
        $this->releaseDate = $releaseDate;
        $this->editor = $editor;
        $this->genre = $genre;
        $this->minimumAge = $minimumAge;
    }

    // GETTER
    /**  @return string */
    public function getTitle(){
        return $this -> title;
    }

    public function getReleaseDate(){
        return date('Y-m-d', $this->releaseDate);
    }

    public function getEditor(){
        return $this -> editor;
    }

    public function getGenre(){
        return $this -> genre;
    }

    public function getMinimumAge() {
        return $this->minimumAge;
    }

    // SETTER
    /**  @return string $title */
    public function setTitle($title){
        //validation de la donnée
        if(is_string($title)){
            $this -> title = $title;
        }
    }

    public function setMinimumAge($minimumAge) {
        $this->minimumAge = $minimumAge;
    }

    // EXO 6
    public abstract function letStart($parameter);

    public abstract function displayDebutJeu($game);
    public abstract function displayFinJeu($game);

    // EXO 7
    /** @return array */
    public function targetPublic() {
        $publicList = array();

        if ($this->minimumAge <= self::$babyMaxAge) {
            $publicList[] = 'baby';
        }
        if ($this->minimumAge <= self::$childMaxAge) {
            $publicList[] = 'child';
        }
        if ($this->minimumAge <= self::$teenagerMaxAge) {
            $publicList[] = 'teenager';
        }
        if ($this->minimumAge <= self::$adultMaxAge) {
            $publicList[] = 'adult';
        }
        $publicList[] = 'senior';

        return $publicList;
    }
}
