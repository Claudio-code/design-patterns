<?php

require_once "Orcamento.php";
require_once "Imposto.php";

class ICMS implements Imposto
{
    public function calcular(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.1;
    }
}