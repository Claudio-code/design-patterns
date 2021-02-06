<?php

require_once 'Implementador.php';
require_once 'Professor.php';
require_once 'ProfessorImplGraduacao.php';
require_once 'ProfessorImplPosGraduacao.php';
require_once 'ProfessorGraduacao.php';
require_once 'ProfessorPosGraduacao.php';

$graduacao = new ProfessorGraduacao(new ProfessorImplGraduacao());
$graduacao->op();

$posGraduacao = new ProfessorPosGraduacao(new ProfessorImplPosGraduacao());
$posGraduacao->op();