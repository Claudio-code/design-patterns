<?php

require_once './Memento.php';

class VendasMemoria
{
    private Memento $memento;

    public function getMemento(): Memento
    {
        return $this->memento;
    }

    public function setMemento(Memento $memento): self
    {
        $this->memento = $memento;

        return $this;
    }
}
