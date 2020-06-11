<?php

require_once "CalculadorDescontos.php";
require_once "Orcamento.php";
require_once "Item.php";

$calculador = new CalculadorDescontos();
$orcamento = new Orcamento(500);

$orcamento->adicionaItem(new Item("caneta", 250.0));
$orcamento->adicionaItem(new Item("lapis", 250.0));
$value = $calculador->calcula($orcamento);

print_r($value);