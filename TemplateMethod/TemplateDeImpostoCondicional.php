<?php

require_once 'Orcamento.php';

require_once 'Imposto.php';

abstract class TemplateDeImpostoCondicional implements Imposto
{
    abstract public function minimaTaxacao(Orcamento $orcamento): float;

    abstract public function maximaTaxacao(Orcamento $orcamento): float;

    abstract public function deveUsarMaximaTaxacao(Orcamento $orcamento): float;

    public function calcular(Orcamento $orcamento): float
    {
        if ($this->deveUsarMaximaTaxacao($orcamento)) {
            return $this->maximaTaxacao($orcamento);
        }

        return $this->minimaTaxacao($orcamento);
    }
}
