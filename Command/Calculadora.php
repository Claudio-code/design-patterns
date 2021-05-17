<?php

class Calculadora
{
    private int $valor = 0;

    public function getValor(): int
    {
        return $this->valor;
    }

    public function setValor(int $valor): void
    {
        $this->valor = $valor;
    }
}
