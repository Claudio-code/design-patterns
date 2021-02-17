<?php

require_once 'PassagemOnibusUrbano.php';

require_once 'PassagemOnibusInterEstadual.php';

require_once 'EmpresaOnubus.php';

require_once 'ConcreteEmpresaOnibus.php';

require_once 'ConcretePassagemOnibusInterestadual.php';

require_once 'ConcretePassagemOnibusUrbano.php';

// empresa de onibus
$viacaoX = new ConcreteEmpresaOnibus();

// passagem de unibus urbano

$pUrbano = $viacaoX->emitePassagemOnibusUrbano(
    'Cianorte',
    'Maringa',
    new DateTime('2300-01-01')
);

// passagem de unibus inter estadual

$pInterEstadual = $viacaoX->emitePassagemOnibusInterestadual(
    'São paulo',
    'Diadema',
    new DateTime('2300-11-01')
);

$pUrbano->exibeDetalhes();
print_r("\n\n");
$pInterEstadual->exibeDetalhes();
