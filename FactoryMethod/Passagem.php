<?php

abstract class Passagem
{
    private string $origem;
    private string $destino;
    private DateTime $dataHoraPartida;

    public function __construct(string $origem, string $destino, DateTime $dataHoraPartida)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->dataHoraPartida = $dataHoraPartida;
    }

    public function getOrigem(): string
    {
        return $this->origem;
    }

    public function setOrigem(string $origem): void
    {
        $this->origem = $origem;
    }

    public function getDestino(): string
    {
        return $this->destino;
    }

    public function setDestino(string $destino): void
    {
        $this->destino = $destino;
    }

    public function getDataHoraPartida(): string
    {
        return $this->dataHoraPartida->format('Y-m-d H:i:s');
    }

    public function setDataHoraPartida(DateTime $dataHoraPartida): void
    {
        $this->dataHoraPartida = $dataHoraPartida;
    }

    abstract public function exibeDetalhes(): void;
}
