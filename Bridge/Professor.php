<?php

require_once 'Implementador.php';

abstract class Professor
{
    protected Implementador $imp;

    public function __construct(Implementador $imp)
    {
        $this->imp = $imp;
    }

    abstract public function op(): void;
}
