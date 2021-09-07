<?php

require_once 'Passagem.php';

abstract class Empresa
{
    abstract public function emitePassagem(string $origem, string $destino, DateTime $dataHoraPartida): Passagem;
}
