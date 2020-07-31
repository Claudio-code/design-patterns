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

    /**
     * @return string
     */
    public function getOrigem(): string
    {
        return $this->origem;
    }

    /**
     * @param string $origem
     */
    public function setOrigem(string $origem): void
    {
        $this->origem = $origem;
    }

    /**
     * @return string
     */
    public function getDestino(): string
    {
        return $this->destino;
    }

    /**
     * @param string $destino
     */
    public function setDestino(string $destino): void
    {
        $this->destino = $destino;
    }

    /**
     * @return string
     */
    public function getDataHoraPartida(): string
    {
        return $this->dataHoraPartida->format('Y-m-d H:i:s');
    }

    /**
     * @param DateTime $dataHoraPartida
     */
    public function setDataHoraPartida(DateTime $dataHoraPartida): void
    {
        $this->dataHoraPartida = $dataHoraPartida;
    }

    public abstract function exibeDetalhes(): void;
}