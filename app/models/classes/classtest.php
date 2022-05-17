<?php

namespace models\classes;

class Iamclass
{

    private $alert;

    public function __construct($word)
    {
        $this->alert = $word;
    }

    public function getAlert()
    {
        return $this->alert;
    }
}
