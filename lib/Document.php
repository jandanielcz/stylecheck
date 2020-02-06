<?php

namespace Sjuper;

class Document implements Connectable
{

    /** @var string $title */
    private $title;

    /** @var string $title */
    private $id;

    public function __construct($title, $id)
    {
        $this->title = $title;
        $this->id = $id;
    }

    public function id()
    {
        return $this->id();
    }


}