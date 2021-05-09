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

    public abstract function desenha(string $cor): void;
}
