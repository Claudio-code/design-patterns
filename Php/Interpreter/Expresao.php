<?php

require_once './Contexto.php';

abstract class Expresao
{
    protected string $um;
    protected string $quatro;
    protected string $cinco;
    protected string $nove;
    protected int $multiplicador;

    public function interpretar(Contexto $contexto): void
    {
        if (0 == strlen($contexto->getInput())) {
            return;
        }

        $contexto = match (true) {
            str_starts_with($contexto->getInput(), $this->nove) => $this->seComecaComNove($contexto),
            str_starts_with($contexto->getInput(), $this->quatro) => $this->seComecaComQuatro($contexto),
            str_starts_with($contexto->getInput(), $this->cinco) => $this->seComecaComCinco($contexto),
            default => $contexto,
        };

        while (str_starts_with($contexto->getInput(), $this->um)) {
            $contexto
                ->setOutput($contexto->getOutput() + (1 * $this->multiplicador))
                ->setInput(substr($contexto->getInput(), 1));
        }
    }

    private function seComecaComNove(Contexto $contexto): Contexto
    {
        return $contexto
            ->setOutput($contexto->getOutput() + (9 * $this->multiplicador))
            ->setInput(substr($contexto->getInput(), 2));
    }

    private function seComecaComQuatro(Contexto $contexto): Contexto
    {
        return $contexto
            ->setOutput($contexto->getOutput() + (4 * $this->multiplicador))
            ->setInput(substr($contexto->getInput(), 2));
    }

    private function seComecaComCinco(Contexto $contexto): Contexto
    {
        return $contexto
            ->setOutput($contexto->getOutput() + (5 * $this->multiplicador))
            ->setInput(substr($contexto->getInput(), 1));
    }
}
