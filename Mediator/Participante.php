<?php

require_once "./Mediator.php";

abstract class Participante
{
    private string $nome;
    private Mediator $mediator;

    public function __construct(string $nome, Mediator $mediator)
    {
        $this->nome = $nome;
        $this->mediator = $mediator;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getMediator(): Mediator
    {
        return $this->mediator;
    }

    public function setMediator(Mediator $mediator): self
    {
        $this->mediator = $mediator;

        return $this;
    }

    public abstract function enviaMensagem(string $destinatario, string $mensagem): void;

    public abstract function recebeMensagem(string $remetente, string $mensagem): void;
}