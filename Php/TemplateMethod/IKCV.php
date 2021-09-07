<?php

require_once 'Item.php';

require_once 'Orcamento.php';

require_once 'Imposto.php';

require_once 'TemplateDeImpostoCondicional.php';

class IKCV extends TemplateDeImpostoCondicional
{
    public function minimaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.06;
    }

    public function maximaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.10;
    }

    public function deveUsarMaximaTaxacao(Orcamento $orcamento): float
    {
        return $orcamento->getValor() > 500 && $this->temItemMaiorSemReais($orcamento);
    }

    private function temItemMaiorSemReais(Orcamento $orcamento): bool
    {
        $itens = $orcamento->getItens();
        for ($i = 0; $i < count($itens); ++$i) {
            $item = $itens[$i];

            if ($item->getValor() > 100) {
                return true;
            }
        }

        return false;
    }
}
