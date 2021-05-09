<?php

require_once "FiguraFactory.php";

$figure = FiguraFactory::getFigura("Linha");
$figure->desenha("cor");

$figure = FiguraFactory::getFigura("Oval preenchida");
$figure->desenha("casa");

$figure = FiguraFactory::getFigura("Oval nao preenchida");
$figure->desenha("verde");

$figure2 = FiguraFactory::getFigura("Oval nao preenchida");
$figure2->desenha("roxo");

// verificando se e a msm instancia da classe
var_dump($figure);
var_dump($figure2);
