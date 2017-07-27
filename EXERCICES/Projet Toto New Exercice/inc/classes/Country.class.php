<?php

namespace Inc\classes ;

// dont forget to use : spl_autoload_extensions(".php");

class Country {
    // Properties

    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var int */
    public $inserted;

    // constructeur
    function __construct(
        $id = 0,
        $name = "",
        $inserted = 0
    ) {
        $this   ->  id = $id;
        $this   ->  name = $name;
        $this   ->  inserted = $inserted;
    }
}
