<?php

require_once "Passagem.php";

abstract class Empresa
{
    public abstract function emitePassagem(string $origem, string $destino, DateTime $dataHoraPartida): Passagem;
}