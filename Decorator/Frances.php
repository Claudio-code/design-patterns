<?php

require_once 'Pao.php';

class Frances extends Pao
{
    private float $valor;

    public function __construct(float $valor)
    {
        $this->nome = 'frances';
        $this->valor = $valor;
    }

    public function valor(): float
    {
        return $this->valor;
    }
}
