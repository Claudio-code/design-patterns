<?php

require_once "Orcamento.php";
require_once "Desconto.php";

class DescontoMaisQuinhentosReais implements Desconto
{
    private Desconto $proximo;

    public function desconta(Orcamento $orcamento): float
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        }

        return $this->proximo->desconta($orcamento);
    }

    public function setProximo(Desconto $proximo): void
    {
        $this->proximo = $proximo;
    }
}