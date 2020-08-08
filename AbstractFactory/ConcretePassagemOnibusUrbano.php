<?php

require_once "PassagemOnibusUrbano.php";

class ConcretePassagemOnibusUrbano extends PassagemOnibusUrbano
{

    public function exibeDetalhes(): void
    {
        print_r(
            "Passagem de onibus urbano: {$this->getOrigem()} para {$this->getDestino()}" .
            "na data = {$this->getDataHoraPartida()->format('Y-m-d H:i:s')}"
        );
    }
}