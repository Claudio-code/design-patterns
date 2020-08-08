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

    /**
     * @return string
     */
    public function getOrigem(): string
    {
        return $this->origem;
    }

    /**
     * @param string $origem
     * @return PassagemOnibusUrbano
     */
    public function setOrigem(string $origem): PassagemOnibusUrbano
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
     * @return PassagemOnibusUrbano
     */
    public function setDestino(string $destino): PassagemOnibusUrbano
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
     * @return PassagemOnibusUrbano
     */
    public function setDataHoraPartida(DateTime $dataHoraPartida): PassagemOnibusUrbano
    {
        $this->dataHoraPartida = $dataHoraPartida;
        return $this;
    }

    public abstract function exibeDetalhes(): void;
}