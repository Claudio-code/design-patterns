<?php

require_once "./Mediator.php";

class ChatMediator extends Mediator
{
    /** @var array<string, Mediator> */
    private array $participantes = [];

    /** @var array<string> */
    private array $palavrasProibidas = [];

    public function __construct()
    {
        $this->carregarPalavrasProibidas();
    }

    private function carregarPalavrasProibidas(): void
    {
        $this->palavrasProibidas[] = 'XXXX';
        $this->palavrasProibidas[] = '@!xxx';
        $this->palavrasProibidas[] = '###@!';
    }

    private function verificarSeParticipanteExiste(string $nomeParticipante): bool
    {
        return array_key_exists($nomeParticipante, $this->participantes);
    }

    public function registraParticipante(Participante $participante): void
    {
        if ($this->verificarSeParticipanteExiste($participante->getNome())) {
            print_r("O usuario ja existe. \n");

            return;
        }

        $this->participantes[$participante->getNome()] = $participante;
    }

    public function enviaMensagem(string $remetente, string $destinatario, string $mensagem): void
    {
        if (!$this->verificarSeParticipanteExiste($destinatario) && !$this->verificarSeParticipanteExiste($remetente)) {
            return;
        }

        $participanteRemetente = $this->participantes[$remetente];
        assert($participanteRemetente instanceof Participante);

        $participanteDestinatario = $this->participantes[$destinatario];
        assert($participanteDestinatario instanceof Participante);

        foreach ($this->palavrasProibidas as $palavraProibida) {
            if (str_contains($mensagem, $palavraProibida)) {
                $participanteRemetente->recebeMensagem(
                    "Mediator",
                    "conteudo proibido encontrado na mensagem."
                );

                return;
            }
        }

        $participanteDestinatario->recebeMensagem($remetente, $mensagem);
    }
}