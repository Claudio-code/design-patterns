<?php


class Item
{
    private string $nome;
    private float $valor;

    public function __construct(string $nome, float $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }
}