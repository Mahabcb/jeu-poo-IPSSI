<?php
require_once 'vendor/autoload.php';

use App\Entity\Ennemi;
use App\Entity\Joueur;

$ennemi = new Ennemi("Arthur");
$player = new Joueur("Gobelin");

$player->attaquer($ennemi); // le combat commence
// les degats = à la force de la personne qui attaque
//
// $cible = ennemi
