<?php

require_once "Empregada.php";

class Gerente extends Empregada
{
    /** @var Empregada[] */
    private array $listaSubordinados = [];

    public function __construct(string $nome, float $salario)
    {
        parent::__construct($nome, $salario);
    }

    public function print(): void
    {
        print_r("$this->nome, $this->salario \n");
        foreach ($this->listaSubordinados as $subordinado) {
            if (!($subordinado instanceof Empregada)) {
                continue;
            }

            $subordinado->print();
        }
    }
    
    public function add(Empregada $empregada): void
    {
        $this->listaSubordinados[] = $empregada;
    }
    
    public function remove(Empregada $empregada): void
    {
        if (count($this->listaSubordinados) < 1) {
            return;
        }

        $this->listaSubordinados = array_filter(
            $this->listaSubordinados,
            fn (Empregada $em) => $em->nome === $empregada->nome
        );
    }
}
