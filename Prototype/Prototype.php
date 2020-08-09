<?php


abstract class Prototype
{
    public function __clone() {}

    public abstract function lutar(): void;

    public function clone(): self
    {
        return clone $this;
    }
}