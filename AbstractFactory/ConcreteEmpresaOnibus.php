<?php

require_once "./EmpresaOnubus.php";
require_once "ConcretePassagemOnibusUrbano.php";
require_once "ConcretePassagemOnibusInterestadual.php";

class ConcreteEmpresaOnibus extends EmpresaOnubus
{

    public function emitePassagemOnibusUrbano(string $origem, string $destino, DateTime $dataHoraPartida): PassagemOnibusUrbano
    {
        return new ConcretePassagemOnibusUrbano($origem, $destino, $dataHoraPartida);
    }

    public function emitePassagemOnibusInterestadual(string $origem, string $destino, DateTime $dataHoraPartida): PassagemOnibusInterEstadual
    {
        return new ConcretePassagemOnibusInterestadual($origem, $destino, $dataHoraPartida);
    }
}