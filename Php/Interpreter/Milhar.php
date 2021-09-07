<?php

require_once './Expresao.php';

class Milhar extends Expresao
{
    protected string $um = 'M';
    protected string $quatro = ' ';
    protected string $cinco = ' ';
    protected string $nove = ' ';
    protected int $multiplicador = 1000;
}
