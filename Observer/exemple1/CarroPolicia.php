<?php

require_once "./Carro.php";
require_once "./CarroDirecoesEnum.php";
require_once "../Subject.php";

class CarroPolicia implements Carro, \SplObserver
{
    public function frete(): self
    {
        print_r("Viatura segue em frete. \n");

        return $this;
    }

    public function direita(): self
    {
        print_r("Viatura segue em direita. \n");

        return $this;
    }

    public function esquerda(): self
    {
        print_r("Viatura segue em esquerda. \n");

        return $this;
    }

    public function para(): self
    {
        print_r("Viatura segue em para. \n");

        return $this;
    }

    public function update(SplSubject $subject): void
    {
        if (!($subject instanceof CarroRoubado)) {
            return;
        }

        match ($subject->state) {
            CarroDirecoesEnum::FRENTE => $this->frete(),
            CarroDirecoesEnum::DIREITA => $this->direita(),
            CarroDirecoesEnum::ESQUERDA => $this->esquerda(),
            CarroDirecoesEnum::PARA => $this->para(),
        };
    }
}