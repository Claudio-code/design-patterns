<?php

require_once "Comportamento.php";

class NaoGrasnar extends Comportamento
{
    public function exec(): void
    {
        printf("Esta ave nao grasna! \n");
    }
}
