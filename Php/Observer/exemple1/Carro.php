<?php

interface Carro
{
    public function frete(): self;
    public function direita(): self;
    public function esquerda(): self;
    public function para(): self;
}
