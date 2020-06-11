<?php

require_once "Orcamento.php";

interface Imposto
{
    public function calcular(Orcamento $orcamento): float;
}