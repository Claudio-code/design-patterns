<?php

require_once "FiguraFactory.php";

$figure = FiguraFactory::getFigura("Linha");
$figure->desenha("cor");

$figure1 = FiguraFactory::getFigura("Oval preenchida");
$figure1->desenha("casa");

$figure2 = FiguraFactory::getFigura("Oval nao preenchida");
$figure2->desenha("roxo");

$figure3 = FiguraFactory::getFigura("Oval nao preenchida");
$figure3->desenha("verde");

// verificando se e a msm instancia da classe
var_dump($figure2);
var_dump($figure3);
