<?php

namespace Sjuper;

class Link
{

    private $from;
    private $to;


    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

}