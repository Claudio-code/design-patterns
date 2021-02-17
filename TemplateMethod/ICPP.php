<?php

require_once 'Orcamento.php';

require_once 'Imposto.php';

require_once 'TemplateDeImpostoCondicional.php';

class ICPP extends TemplateDeImpostoCondicional
{
    public function minimaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.05;
    }

    public function maximaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.07;
    }

    public function deveUsarMaximaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() > 500;
    }
}
