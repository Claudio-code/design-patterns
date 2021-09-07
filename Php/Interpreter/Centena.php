<?php

require_once './Expresao.php';

class Centena extends Expresao
{
    protected string $um = 'C';
    protected string $quatro = 'CD';
    protected string $cinco = 'D';
    protected string $nove = 'CM';
    protected int $multiplicador = 100;
}
