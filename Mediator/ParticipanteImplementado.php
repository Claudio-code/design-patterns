<?php

require_once "./Mediator.php";
require_once "./Participante.php";

class ParticipanteImplementado extends Participante
{
    public function __construct(string $nome, Mediator $mediator)
    {
        parent::__construct($nome, $mediator);
    }

    public function enviaMensagem(string $destinatario, string $mensagem): void
    {
        $mediator = $this->getMediator();
        $mediator->enviaMensagem($this->getNome(), $destinatario, $mensagem);
    }

    public function recebeMensagem(string $remetente, string $mensagem): void
    {
        print_r("$remetente escreveu: $mensagem \n");
    }
}