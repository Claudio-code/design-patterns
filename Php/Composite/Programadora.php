<?php

require_once "Empregada.php";

class Programadora extends Empregada
{
    public function __construct(string $nome, float $salario)
    {
        parent::__construct($nome, $salario);
    }

    public function print(): void
    {
        print_r("$this->nome, $this->salario \n");
    }
    
    public function add(Empregada $empregada): void
    {
        print_r("Não é possivel adicionar empregada subordinada da programadora. \n");
    }
    
    public function remove(Empregada $empregada): void
    {
        print_r("Não é possivel remover empregada subordinada da programadora. \n");
    }
}
