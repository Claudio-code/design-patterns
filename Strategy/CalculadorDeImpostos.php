
<?php
require_once "Orcamento.php";
require_once "Imposto.php";

class CalculadorDeImpostos
{
    public function realizarCalculo(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcular($orcamento);
    }

}