<?php

require_once './Memento.php';
require_once './VendasMemoria.php';
require_once './Vendedor.php';

function printVendedor(Vendedor $vendedorNovo): void
{
    print_r($vendedorNovo->getNome().' - total de vendas: '.$vendedorNovo->getTotalVendas()."\n");
}

$vendedor = new Vendedor('Joao', 10000.0);
printVendedor($vendedor);

$vendasMemoria = new VendasMemoria();
$vendasMemoria->setMemento($vendedor->criarMemento());

$vendedor
    ->setNome('Pedro')
    ->setTotalVendas(50000.0);
printVendedor($vendedor);

$vendedor->retorneMemento($vendasMemoria->getMemento());
printVendedor($vendedor);
