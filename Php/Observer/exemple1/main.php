<?php

require_once "./Carro.php";
require_once "./CarroDirecoesEnum.php";
require_once "../Subject.php";
require_once "./CarroPolicia.php";
require_once "./CarroRoubado.php";

$carroPolicia = new CarroPolicia();
$carroRoubado = new CarroRoubado();

$carroRoubado->attach($carroPolicia);

$carroRoubado
    ->frete()
    ->direita()
    ->frete()
    ->esquerda()
    ->para()
;