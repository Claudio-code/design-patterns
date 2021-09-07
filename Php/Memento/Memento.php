<?php

class Memento
{
    public function __construct(
        private string $nome = '',
        private float $totalVendas = 0.0,
    ) {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): Memento
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTotalVendas(): float
    {
        return $this->totalVendas;
    }

    public function setTotalVendas(float $totalVendas): Memento
    {
        $this->totalVendas = $totalVendas;

        return $this;
    }
}
