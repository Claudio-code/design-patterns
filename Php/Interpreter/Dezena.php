<?php

require_once './Expresao.php';

class Dezena extends Expresao
{
    protected string $um = 'X';
    protected string $quatro = 'XL';
    protected string $cinco = 'L';
    protected string $nove = 'XC';
    protected int $multiplicador = 10;
}
