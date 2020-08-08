<?php

require_once "PassagemOnibusInterEstadual.php";
require_once "PassagemOnibusUrbano.php";

abstract class  EmpresaOnubus
{
    public abstract function emitePassagemOnibusUrbano(string $origem, string $destino, DateTime $dataHoraPartida): PassagemOnibusUrbano;
    public abstract function emitePassagemOnibusInterestadual(string $origem, string $destino, DateTime $dataHoraPartida): PassagemOnibusInterEstadual;
}