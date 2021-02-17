<?php

require_once 'Pao.php';

class Baguete extends Pao
{
    private float $valor;

    public function __construct(float $valor)
    {
        $this->nome = 'Baguete';
        $this->valor = $valor;
    }

    public function valor(): float
    {
        return $this->valor;
    }
}
