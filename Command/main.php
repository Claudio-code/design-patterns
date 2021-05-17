<?php

require_once "Command.php";
require_once "Calculadora.php";
require_once "Invoker.php";
require_once "Soma.php";

$calculadora = new Calculadora();
$invoker = new Invoker();

$invoker->compute(new Soma($calculadora, 21));
$invoker->compute(new Soma($calculadora, 521));
$invoker->compute(new Soma($calculadora, 93));
$invoker->compute(new Soma($calculadora, 10));
$invoker->undo(2);
