<?php

require_once 'Orcamento.php';

require_once 'Item.php';

require_once 'IKCV.php';

$orcamento = new Orcamento(500);
$ikcv = new IKCV();

$orcamento->adicionaItem(new Item('caneta', 250.0));
$orcamento->adicionaItem(new Item('lapis', 250.0));

$value = $ikcv->calcular($orcamento);

print_r($value);
