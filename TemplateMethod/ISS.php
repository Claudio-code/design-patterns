<?php

require_once 'Orcamento.php';

require_once 'Imposto.php';

class ISS implements Imposto
{
    public function calcular(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.6;
    }
}
