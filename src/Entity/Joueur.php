<?php

namespace App\Entity;

use App\Entity\AbstractPersonnage;

class Joueur extends AbstractPersonnage{
    
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function regenererLaVie() : ?int
    {
        // si on est mort on peut pas se regénérer
        // on aimerait regagner de la vie sur un int fixe
        if($this->vie === false) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas vous regénérer");
        }
        if($this->pointDeVie >= 100) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas vous regénérer");
        }
        return $this->pointDeVie += 10;
    }

    public function fuir() : string
    {
        $this->vie = true;
        return print_r("Vous avez fui le combat, vous avez perdu");
        exit();
    }
}

/**
 * Quand doit-on throw une exception ?
 * 
 * Quand on veut stopper le script
 * 
 * 
 */