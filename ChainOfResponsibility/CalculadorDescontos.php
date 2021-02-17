<?php

require_once 'Orcamento.php';

require_once 'DescontoMaisQuinhentosReais.php';

require_once 'SemDesconto.php';

require_once 'DescontoPorcincoItens.php';

class CalculadorDescontos
{
    public function calcula(Orcamento $orcamento): float
    {
        $desc1 = new DescontoMaisQuinhentosReais();
        $desc2 = new DescontoPorcincoItens();
        $desc3 = new SemDesconto();

        $desc1->setProximo($desc2);
        $desc2->setProximo($desc3);

        return $desc1->desconta($orcamento);
    }
}
