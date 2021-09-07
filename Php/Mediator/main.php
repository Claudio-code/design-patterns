<?php

require_once "./Mediator.php";
require_once "./Participante.php";
require_once "./ChatMediator.php";
require_once "./ParticipanteImplementado.php";

$salaChat = new ChatMediator();

$joao = new ParticipanteImplementado('Joao', $salaChat);
$maria = new ParticipanteImplementado('Maria', $salaChat);
$carlos = new ParticipanteImplementado('Carlos', $salaChat);
$renato = new ParticipanteImplementado('Renato', $salaChat);

$salaChat->registraParticipante($joao);
$salaChat->registraParticipante($maria);
$salaChat->registraParticipante($carlos);
$salaChat->registraParticipante($renato);

$joao->enviaMensagem('Maria', 'Ola Maria, tudo bem?');
$maria->enviaMensagem('Joao', 'Oi td, e com vc?');
$carlos->enviaMensagem('Renato', 'Renato, vc é um @!xxx.');
$joao->enviaMensagem('Maria', 'Vc esta no trabalho agr?');