<?php

abstract class Prototype
{
    public function __clone()
    {
    }

    abstract public function lutar(): void;

    public function clone(): self
    {
        return clone $this;
    }
}
