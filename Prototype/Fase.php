<?php

require_once "Prototype.php";
require_once "Chefao.php";
require_once "Vilao.php";
require_once "Npc.php";

class Fase
{
    private array $personagensMap = [];

    public function carregarFase(): void
    {
        $npc = new Npc();
        $this->personagensMap['npc'] = $npc;

        $vilao = new Vilao();
        $this->personagensMap['vilao'] = $vilao;

        $chefao = new Chefao();
        $this->personagensMap['chefao'] = $chefao;
    }

    public function getPersonagem(string $nome): Prototype
    {
        $personagem = $this->personagensMap[$nome];
        return $personagem->clone();
    }
}