<?php

namespace App\Entity;

use App\Entity\AbstractPersonnage;

/**
 * Le gameplay du jeu
 */

abstract class AbstractGamePlayController extends AbstractPersonnage{
    // On attaque notre enemi (notre ennemi est la cible)
    // on récupere notre force et on la met dans dégats
    // la cible va subir des degats qu'on lui aura causé
    // si la vie de la cible est false, elle meurt, je gagne le jeu s'arrete
    // sinon le jeu continue et je peux encore attaquer
    public function attaquer($cible) : bool
    {
        if($this->vie === false) {
            throw new \Exception("Vous êtes mort, vous ne pouvez pas attaquer");
            exit();
        }else{
            $degats = $this->force;

            $cible->subirDegats($degats);
            if($cible->vie === false) {
                print_r("Vous avez tué votre ennemi, vous avez gagné");
                return true;
                exit();
            }
            return false;
        }
    }

    /**
     * Cette function permet de faire subir des dégat à notre cible
     */
    protected function subirDegats(int $degats)
    {
        $this->pointDeVie -= $degats;

        if($this->pointDeVie <= 0){
            $this->vie = false;
            return print_r("Vous êtes mort");
            exit();
        }
    }

}