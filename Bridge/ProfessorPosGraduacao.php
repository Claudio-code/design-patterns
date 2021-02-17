<?php

require_once 'Professor.php';

class ProfessorPosGraduacao extends Professor
{
    public function op(): void
    {
        print_r("cagada \n");
        $this->imp->opImpl();
    }
}
