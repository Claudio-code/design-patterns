<?php

abstract class PassagemOnibusInterEstadual
{
    private string $origem;
    private string $destino;
    private DateTime $dataHoraPartida;

    public function __construct(string $origem, string $destino, DateTime $dataHoraPartida)
    {
        $this->dataHoraPartida = $dataHoraPartida;
        $this->destino = $destino;
        $this->origem = $origem;
    }

    public function getOrigem(): string
    {
        return $this->origem;
    }

    public function setOrigem(string $origem): PassagemOnibusInterEstadual
    {
        $this->origem = $origem;

        return $this;
    }

    public function getDestino(): string
    {
        return $this->destino;
    }

    public function setDestino(string $destino): PassagemOnibusInterEstadual
    {
        $this->destino = $destino;

        return $this;
    }

    public function getDataHoraPartida(): DateTime
    {
        return $this->dataHoraPartida;
    }

    public function setDataHoraPartida(DateTime $dataHoraPartida): PassagemOnibusInterEstadual
    {
        $this->dataHoraPartida = $dataHoraPartida;

        return $this;
    }

    abstract public function exibeDetalhes(): void;
}
