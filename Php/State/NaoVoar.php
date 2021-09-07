<?php

require_once "Comportamento.php";

class NaoVoar extends Comportamento
{
    public function exec(): void
    {
        printf("Esta ave nao voa :( \n");
    }
}
