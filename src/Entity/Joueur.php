<?php

namespace App\Entity;

use App\Entity\AbstractPersonnage;

class Joueur extends AbstractPersonnage{
    
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function fuir() : bool
    {
        return $this->vie = true;
    }
}