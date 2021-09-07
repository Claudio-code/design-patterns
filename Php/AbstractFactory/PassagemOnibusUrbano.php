<?php

abstract class PassagemOnibusUrbano
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

    public function setOrigem(string $origem): PassagemOnibusUrbano
    {
        $this->origem = $origem;

        return $this;
    }

    public function getDestino(): string
    {
        return $this->destino;
    }

    public function setDestino(string $destino): PassagemOnibusUrbano
    {
        $this->destino = $destino;

        return $this;
    }

    public function getDataHoraPartida(): DateTime
    {
        return $this->dataHoraPartida;
    }

    public function setDataHoraPartida(DateTime $dataHoraPartida): PassagemOnibusUrbano
    {
        $this->dataHoraPartida = $dataHoraPartida;

        return $this;
    }

    abstract public function exibeDetalhes(): void;
}
