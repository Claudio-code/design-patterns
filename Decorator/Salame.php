<?php

require_once 'Pao.php';

require_once 'RecheioDecorator.php';

class Salame extends RecheioDecorator
{
    private Pao $pao;
    private float $valor;

    public function __construct(Pao $pao, float $valor)
    {
        $this->pao = $pao;
        $this->valor = $valor;
    }

    public function getNome(): string
    {
        // TODO: Change the autogenerated stub
        return parent::getNome().', Salame';
    }

    public function valor(): float
    {
        return $this->pao->valor() + $this->valor;
    }
}
