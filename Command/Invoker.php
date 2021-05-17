<?php

require_once "Command.php";

class Invoker
{
    private int $current = 0;
    private array $comandos = [];

    public function compute(Command $command): void
    {
        $command->execute();
        $this->comandos[] = $command;
        $this->current++;
    }

    public function undo(int $levels): void
    {
        for ($index = 0; $index < $levels; $index++) {
            if ($this->current <= 0) {
                continue;
            }

            $command = $this->comandos[--$this->current];
            if ($command instanceof Command) {
                $command->undo();
                unset($this->comandos[--$this->current]);
            }
        }
    }
}
