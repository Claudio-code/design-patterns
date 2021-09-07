<?php

require_once 'Orcamento.php';

require_once 'Desconto.php';

class DescontoPorcincoItens implements Desconto
{
    private Desconto $proximo;

    public function desconta(Orcamento $orcamento): float
    {
        if (count($orcamento->getItens()) > 5) {
            return $orcamento->getValor() * 0.1;
        }

        return $this->proximo->desconta($orcamento);
    }

    public function setProximo(Desconto $proximo): void
    {
        $this->proximo = $proximo;
    }
}
