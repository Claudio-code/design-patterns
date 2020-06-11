<?php
require_once "ICMS.php";
require_once "ISS.php";
require_once "Orcamento.php";
require_once "CalculadorDeImpostos.php";

$icms = new ICMS();
$iss = new ISS();

$orcamento = new Orcamento(500.0);

$calcula = new CalculadorDeImpostos();
$value = $calcula->realizarCalculo($orcamento, $icms);
print_r("$value \n");

$value = $calcula->realizarCalculo($orcamento, $iss);
print_r($value);