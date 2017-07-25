<?php

class Student {
    /** @var string */
    public $email;
    /** @var string */
    public $id;
    /** @var string */
    public $lastname ;
    /** @var string */
    public $firstname ;
    /** @var string */
    public $birthdate ;
    /** @var string */
    public $friendliness ;
    /** @var string */
    public $inserted ;
    /** @var string */
    public $session ;
    /** @var string */
    public $city ;

    function __construct(
        $email          = "",
        $id             = "",
        $lastname       = "",
        $firstname      = "",
        $birthdate      = "",
        $friendliness   = "",
        $inserted       = "",
        $session        = "",
        $city           = ""
    ){
        $this   ->  email           = $email;
        $this   ->  id              = $id;
        $this   ->  lastname        = $lastname;
        $this   ->  firstname       = $firstname;
        $this   ->  birthdate       = $birthdate;
        $this   ->  friendliness    = $friendliness;
        $this   ->  inserted        = $inserted;
        $this   ->  session         = $session;
        $this   ->  city            = $city;
    }

}
