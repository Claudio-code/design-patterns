<?php

require_once "Empregada.php";
require_once "Gerente.php";
require_once "Programadora.php";

$pEstagiario = new Programadora("Ana", 22.2);
$pJunior = new Programadora("Carla", 412);
$pSenior = new Programadora("Marcia", 332.21);

$gerente1 = new Gerente("Loiane", 31213.212);
$gerente2 = new Gerente("Diana", 13412.212);
$gerente3 = new Gerente("Vanessa", 89182);

$gerente1->add($pEstagiario);
$gerente1->add($pJunior);

$gerente2->add($pSenior);

$gerente3->add($gerente1);
$gerente3->add($gerente2);

$gerente3->print();
