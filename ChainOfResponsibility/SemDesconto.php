<?php

require_once 'Desconto.php';

class SemDesconto implements Desconto
{
    public function desconta(Orcamento $orcamento): float
    {
        return 0;
    }

    public function setProximo(Desconto $proximo): void
    {
        // TODO: Implement setProximo() method.
    }
}
