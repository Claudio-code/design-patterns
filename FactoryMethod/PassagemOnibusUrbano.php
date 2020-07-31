<?php

require_once "Passagem.php";
require_once "Empresa.php";

class PassagemOnibusUrbano extends Passagem
{
    public function exibeDetalhes(): void
    {
        print_r("origem {$this->getOrigem()}, destino {$this->getDestino()} e data de partida {$this->getDataHoraPartida()}");
    }
}