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

    /**
     * @return string
     */
    public function getOrigem(): string
    {
        return $this->origem;
    }

    /**
     * @param string $origem
     * @return PassagemOnibusInterEstadual
     */
    public function setOrigem(string $origem): PassagemOnibusInterEstadual
    {
        $this->origem = $origem;
        return $this;
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
     * @return PassagemOnibusInterEstadual
     */
    public function setDestino(string $destino): PassagemOnibusInterEstadual
    {
        $this->destino = $destino;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDataHoraPartida(): DateTime
    {
        return $this->dataHoraPartida;
    }

    /**
     * @param DateTime $dataHoraPartida
     * @return PassagemOnibusInterEstadual
     */
    public function setDataHoraPartida(DateTime $dataHoraPartida): PassagemOnibusInterEstadual
    {
        $this->dataHoraPartida = $dataHoraPartida;
        return $this;
    }

    public abstract function exibeDetalhes(): void;
}