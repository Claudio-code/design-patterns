<?php

require_once 'Professor.php';

class ProfessorGraduacao extends Professor
{
    public function op(): void
    {
        print_r("ola nova \n");
        $this->imp->opImpl();
    }
}