<?php

require_once "../Subject.php";

class ExempleOneSubject extends Subject
{
    public function someBusinessLogic(): void
    {
        echo "\nSubject: Estou fazendo uma coisa importante.\n";
        $this->state = rand(0, 10);

        echo "Subject: Estou notificando que estou mudando o estado: {$this->state}\n";
        $this->notify();
    }
}