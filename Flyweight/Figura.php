<?php

abstract class Figura
{
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function type(): string
    {
        return $this->type;
    }

    abstract public function desenha(string $cor): void;
}
