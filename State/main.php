<?php

require_once "Comportamento.php";
require_once "Ave.php";
require_once "Grasnar.php";
require_once "Voa.php";
require_once "NaoVoar.php";
require_once "Pato.php";

$pato = new Pato();
$pato->setComportamentoVoar(new NaoVoar());

$pato->voar();
$pato->grasnar();
