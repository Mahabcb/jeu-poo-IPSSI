<?php

namespace App\Controller;

final class GobelinGamePlayController extends EnnemiAbstractController implements GameplayInterface{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function invoquerDesTroll()
    {
        return print_r("J'invoque des trolls");
    }
}