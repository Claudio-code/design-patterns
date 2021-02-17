<?php

require_once './PassagemOnibusInterEstadual.php';

class ConcretePassagemOnibusInterestadual extends PassagemOnibusInterEstadual
{
    public function exibeDetalhes(): void
    {
        print_r(
            "Passagem de onibus urbano: {$this->getOrigem()} para {$this->getDestino()}".
            "na data = {$this->getDataHoraPartida()->format('Y-m-d H:i:s')}"
        );
    }
}
