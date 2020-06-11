<?php

require_once "Item.php";

class Orcamento
{
    private float $valor;
    private array $itens = [];

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function adicionaItem(Item $item): void
    {
        array_push($this->itens, $item);
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }
}