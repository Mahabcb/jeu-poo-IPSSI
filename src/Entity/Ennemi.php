<?php

namespace App\Entity;

use App\Entity\AbstractPersonnage;

class Ennemi extends AbstractPersonnage{
    
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}