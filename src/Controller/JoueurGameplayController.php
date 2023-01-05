<?php

namespace App\Controller;

use App\Entity\AbstractGamePlayController;


final class JoueurGameplayController extends AbstractGamePlayController implements GameplayInterface{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    /**
     * Ces actions sont propres aux personnages joueur 
     */
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