<?php

require_once "SubSistemaUm.php";
require_once "SubSistemaDois.php";
require_once "SubSistemaTreis.php";

class Facade
{
    private SubSistemaUm $subSistemaUm;
    private SubSistemaDois $subSistemaDois;
    private SubSistemaTreis $subSistemaTreis;

    public function __construct()
    {
        $this->subSistemaUm = new SubSistemaUm();
        $this->subSistemaDois = new SubSistemaDois();
        $this->subSistemaTreis = new SubSistemaTreis();
    }

    public function metodoA(): void
    {
        $this->subSistemaUm->metodoUm();
        $this->subSistemaDois->metodoDois();
        $this->subSistemaTreis->metodoTreis();
    }

    public function metodoB(): void
    {
        $this->subSistemaTreis->metodoTreis();
        $this->subSistemaDois->metodoDois();
        $this->subSistemaUm->metodoUm();
    }
}