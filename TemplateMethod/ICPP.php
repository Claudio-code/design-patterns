<?php

require_once "Orcamento.php";
require_once "Imposto.php";

class ICPP implements Imposto
{

    public function calcular(Orcamento $orcamento): float
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        }

        return $orcamento->getValor() * 0.05;
    }

    private function itemMaiorQueCemReais(Orcamento $orcamento) {

    }
}