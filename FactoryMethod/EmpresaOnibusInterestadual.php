<?php

require_once "Passagem.php";
require_once "Empresa.php";

class EmpresaOnibusInterestadual extends Empresa
{

    public function emitePassagem(string $origem, string $destino, DateTime $dataHoraPartida): Passagem
    {
        return new PassagemOnibusInterestadual($origem, $destino, $dataHoraPartida);
    }
}