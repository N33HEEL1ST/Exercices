<?php

class Country {
    /** @var string */
    public $id;
    /** @var string */
    public $name;
    /** @var string */
    public $inserted;

    function __construct(
                            $id         ="",
                            $name       ="",
                            $inserted   =""
                        ) {
        $this   ->  id          = $id;
        $this   ->  name        = $name;
        $this   ->  inserted    = $inserted;
    }
}
