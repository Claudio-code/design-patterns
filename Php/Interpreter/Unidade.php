<?php

require_once './Expresao.php';

class Unidade extends Expresao
{
    protected string $um = 'I';
    protected string $quatro = 'IV';
    protected string $cinco = 'V';
    protected string $nove = 'IX';
    protected int $multiplicador = 1;
}
