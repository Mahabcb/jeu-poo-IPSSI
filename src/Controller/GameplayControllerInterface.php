<?php

namespace App\Controller;

interface GameplayInterface{
    public function attaquer($cible) : bool;
}