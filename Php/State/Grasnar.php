<?php

require_once "Comportamento.php";

class Grasnar extends Comportamento
{
    public function exec(): void
    {
        print_r("Esta ave grasna! \n");
    }
}
