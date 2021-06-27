<?php

require_once "./Carro.php";
require_once "./CarroDirecoesEnum.php";
require_once "../Subject.php";

class CarroRoubado extends Subject implements Carro
{
    public function frete(): self
    {
        $this->state = CarroDirecoesEnum::FRENTE;
        print_r("Carro roubado segue em frente. \n");
        $this->notify();

        return $this;
    }

    public function direita(): self
    {
        $this->state = CarroDirecoesEnum::DIREITA;
        print_r("Carro roubado vira a direita. \n");
        $this->notify();

        return $this;
    }

    public function esquerda(): self
    {
        $this->state = CarroDirecoesEnum::ESQUERDA;
        print_r("Carro roubado vira a esquerda. \n");
        $this->notify();

        return $this;
    }

    public function para(): self
    {
        $this->state = CarroDirecoesEnum::PARA;
        print_r("Carro roubado para. \n");
        $this->notify();

        return $this;
    }
}
