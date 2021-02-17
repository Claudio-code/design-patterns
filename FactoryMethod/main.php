<?php

require_once 'Empresa.php';

require_once 'EmpresaOnibusInterestadual.php';

require_once 'EmpresaOnibusUrbano.php';

require_once 'Passagem.php';

require_once 'PassagemOnibusUrbano.php';

require_once 'PassagemOnibusInterestadual.php';

$viacaoUrbana = new EmpresaOnibusUrbano();
$viacaoInterestadual = new EmpresaOnibusInterestadual();

$pUrbano = $viacaoUrbana->emitePassagem('cia', 'joenvile', new DateTime('2000-01-01'));
$pInter = $viacaoInterestadual->emitePassagem('curitiba', 'maringa', new DateTime('1010-01-01'));

$pInter->exibeDetalhes();
print_r("\n\n");
$pUrbano->exibeDetalhes();
