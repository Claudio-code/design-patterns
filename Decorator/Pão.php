<?php


abstract class Pão
{
    protected string $nome;

    public function getNome(): string
    {
        return $this->nome;
    }
}