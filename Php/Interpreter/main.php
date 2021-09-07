<?php

require_once './Expresao.php';
require_once './Dezena.php';
require_once './Unidade.php';
require_once './Milhar.php';
require_once './Centena.php';

$romano = 'MCMXXVIII';
$contexto = new Contexto($romano);

$arvore = [
    new Milhar(),
    new Centena(),
    new Dezena(),
    new Unidade(),
];

foreach ($arvore as $key => $value) {
    $value->interpretar($contexto);
}
var_dump($contexto->getOutput());
