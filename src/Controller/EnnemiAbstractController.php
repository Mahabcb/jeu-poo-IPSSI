<?php

namespace App\Controller;

use App\Entity\AbstractGamePlayController;

abstract class EnnemiAbstractController extends AbstractGamePlayController{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function magieNoire() : string
    {
        return print_r("Je suis un magicien noir");
    }
}