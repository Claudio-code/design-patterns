<?php

require_once 'Passagem.php';

require_once 'Empresa.php';

class EmpresaOnibusUrbano extends Empresa
{
    public function emitePassagem(string $origem, string $destino, DateTime $dataHoraPartida): Passagem
    {
        return new PassagemOnibusUrbano($origem, $destino, $dataHoraPartida);
    }
}
