<?php

abstract class Empregada
{
    protected string $nome;
    protected float $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    abstract public function print(): void;
    abstract public function add(Empregada $empregada): void;
    abstract public function remove(Empregada $empregada): void;
}
