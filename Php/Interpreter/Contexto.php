<?php

class Contexto
{
    public function __construct(
        private string $input,
        private int $output = 0,
    ) {
    }

    public function getOutput(): int
    {
        return $this->output;
    }

    public function setOutput(int $output): self
    {
        $this->output = $output;

        return $this;
    }

    public function getInput(): string
    {
        return strtoupper($this->input);
    }

    public function setInput(string $input): self
    {
        $this->input = $input;

        return $this;
    }
}
