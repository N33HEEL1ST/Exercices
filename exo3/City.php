<?php

class City {
    /** @var string */
    public $id;
    /** @var string */
    public $name ;
    /** @var string */
    public $inserted ;
    /** @var string */
    public $country ;

    function __construct(
                            $id         ="",
                            $name       ="",
                            $inserted   ="",
                            $country    =""
                        ) {
        $this   ->  id          = $id;
        $this   ->  name        = $name;
        $this   ->  inserted    = $inserted;
        $this   ->  country     = $country;
    }

}
