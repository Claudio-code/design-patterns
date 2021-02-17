<?php

require_once 'PassagemOnibusInterEstadual.php';

require_once 'PassagemOnibusUrbano.php';

abstract class EmpresaOnubus
{
    abstract public function emitePassagemOnibusUrbano(string $origem, string $destino, DateTime $dataHoraPartida): PassagemOnibusUrbano;

    abstract public function emitePassagemOnibusInterestadual(string $origem, string $destino, DateTime $dataHoraPartida): PassagemOnibusInterEstadual;
}
