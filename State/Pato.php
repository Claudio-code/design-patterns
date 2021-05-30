<?php

require_once "Comportamento.php";
require_once "Ave.php";
require_once "Grasnar.php";
require_once "Voa.php";

class Pato extends Ave
{
    private Comportamento $comportamentoVoar;
    private Comportamento $comportamentoGrasnar;

    public function __construct()
    {
        $this->comportamentoGrasnar = new Grasnar();
        $this->comportamentoVoar = new Voa();
    }

    public function voar(): void
    {
        $this->comportamentoVoar->exec();
    }

    public function grasnar(): void
    {
        $this->comportamentoGrasnar->exec();
    }

    public function setComportamentoVoar(Comportamento $comportamento): void
    {
        $this->comportamentoVoar = $comportamento;
    }

    public function setComportamentoGrasnar(Comportamento $comportamento): void
    {
        $this->comportamentoGrasnar = $comportamento;
    }
}
