<?php

require_once "Comportamento.php";

class Voa extends Comportamento
{
    public function exec(): void
    {
        print_r("Esta ave voa! \n");
    }
}
