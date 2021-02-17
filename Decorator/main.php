<?php

require_once 'Frances.php';

require_once 'Salame.php';

require_once 'Baguete.php';

$frances = new Frances(22);
$baguete = new Baguete(11);

$francesComSalame = new Salame($frances, 21);
$bagueteComSalame = new Salame($baguete, 11);

echo $francesComSalame->valor()."\n";
echo $bagueteComSalame->valor();
