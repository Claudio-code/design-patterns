<?php

require_once "Comportamento.php";

abstract class Ave
{
    abstract public function voar(): void;
    abstract public function grasnar(): void;
    abstract public function setComportamentoVoar(Comportamento $comportamento): void;
    abstract public function setComportamentoGrasnar(Comportamento $comportamento): void;
}
