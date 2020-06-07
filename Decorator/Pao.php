<?php


abstract class Pao
{
    protected string $nome;

    public function getNome(): string
    {
        return $this->nome;
    }
}