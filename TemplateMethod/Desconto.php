<?php

require_once 'Orcamento.php';

interface Desconto
{
    public function desconta(Orcamento $orcamento): float;

    public function setProximo(Desconto $proximo): void;
}
