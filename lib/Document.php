<?php

namespace Sjuper;

class Document 
{

    /** @var string $title */
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

}