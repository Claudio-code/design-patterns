<?php

require_once "Figura.php";

class Oval extends Figura
{
    private bool $preenchido;

    public function __construct(bool $preenchido)
    {
        parent::__construct(Oval::class);
        $this->preenchido = $preenchido;
    }

    public function preenchido(): bool
    {
        return $this->preenchido;
    }

    public function desenha(string $cor): void
    {
        if ($this->preenchido) {
            print_r("Figura oval preenchida $cor. \n");

            return;
        }

        print_r("Figura oval nao preenchida $cor. \n");
    }
}