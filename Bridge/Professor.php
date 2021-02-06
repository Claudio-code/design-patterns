<?php

require_once 'Implementador.php';

abstract class Professor
{
    public function __construct(
        protected Implementador $imp,
    ) {
    }

    public abstract function op(): void;
}
