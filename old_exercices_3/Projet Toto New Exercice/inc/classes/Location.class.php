<?php

namespace Inc\classes ;

// dont forget to use : spl_autoload_extensions(".php");

class Location {
    // Properties

    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var int */
    public $inserted;

    /** @var Country */
    public $country;

    // constructeur
    function __construct(
        $id = 0,
        $name = "",
        $inserted = 0,
        $country = null
    ) {
        $this   ->  id = $id;
        $this   ->  name = $name;
        $this   ->  inserted = $inserted;
        $this   ->  country = $country;
    }
}
