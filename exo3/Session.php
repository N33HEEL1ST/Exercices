<?php

class Session {
    /** @var string */
    public $id;
    /** @var string */
    public $startDate ;
    /** @var string */
    public $endDate ;
    /** @var string */
    public $number ;
    /** @var string */
    public $inserted ;
    /** @var string */
    public $location ;
    /** @var string */
    public $training ;

    function __construct(
                            $id         ="",
                            $startDate  ="",
                            $endDate    ="",
                            $number     ="",
                            $inserted   ="",
                            $location   ="",
                            $training   =""
                        ) {
        $this   ->  id          = $id;
        $this   ->  startDate   = $startDate;
        $this   ->  endDate     = $endDate;
        $this   ->  number      = $number;
        $this   ->  inserted    = $inserted;
        $this   ->  location    = $location;
        $this   ->  training    = $training;
    }

}
