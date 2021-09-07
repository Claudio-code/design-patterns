<?php

abstract class Mediator
{
    public abstract function enviaMensagem(
        string $remetente,
        string $destinatario,
        string $mensagem
    ): void;
}