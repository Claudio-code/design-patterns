<?php

require_once './Memento.php';

class Vendedor
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

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTotalVendas(): float
    {
        return $this->totalVendas;
    }

    public function setTotalVendas(float $totalVendas): self
    {
        $this->totalVendas = $totalVendas;

        return $this;
    }

    public function criarMemento(): Memento
    {
        return new Memento($this->nome, $this->totalVendas);
    }

    public function retorneMemento(Memento $memento): void
    {
        $this->nome = $memento->getNome();
        $this->totalVendas = $memento->getTotalVendas();
    }
}
