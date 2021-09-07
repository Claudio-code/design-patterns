<?php


require_once "../Subject.php";
require_once "./ExempleOneSubject.php";
require_once "./ConcreteObserverA.php";
require_once "./ConcreteObserverB.php";

$subject = new ExempleOneSubject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);

$subject->someBusinessLogic();
$subject->someBusinessLogic();

$subject->detach($o2);

$subject->someBusinessLogic();