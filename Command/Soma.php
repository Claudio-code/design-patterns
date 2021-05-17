<?php

require_once "Command.php";
require_once "Calculadora.php";

class Soma extends Command
{
    private Calculadora $calculadora;
    private int $numero;

    public function __construct(Calculadora $calculadora, int $numero)
    {
        $this->calculadora = $calculadora;
        $this->numero = $numero;
    }

    public function execute(): void
    {
        $total = $this->calculadora->getValor() + $this->numero;
        $this->calculadora->setValor($total);

        print_r($this->calculadora->getValor() . "\n");
    }

    public function undo(): void
    {
        $total = $this->calculadora->getValor() - $this->numero;
        $this->calculadora->setValor($total);

        print_r($this->calculadora->getValor() . "\n");
    }
}
