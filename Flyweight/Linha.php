<?php

require_once "Figura.php";

class Linha extends Figura
{
    public function __construct()
    {
        parent::__construct(Linha::class);
    }

    public function desenha(string $cor): void
    {
        print_r("figura linha $cor. \n");
    }
}