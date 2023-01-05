<?php
/**
 * Tout ce qui est attrait au personnage
 */
namespace App\Entity;

use App\Entity\AbstractPersonnage;

class Joueur extends AbstractPersonnage{
    
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    
}

/**
 * Quand doit-on throw une exception ?
 * 
 * Quand on veut stopper le script
 * 
 * 
 */