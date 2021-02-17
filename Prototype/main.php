<?php

require_once 'Prototype.php';

require_once 'Chefao.php';

require_once 'Vilao.php';

require_once 'Npc.php';

require_once 'Fase.php';

// criar fase
$fase = new Fase();
$fase->carregarFase();

// carregar personagens
$fase->getPersonagem('npc')->lutar();
$fase->getPersonagem('vilao')->lutar();
$fase->getPersonagem('chefao')->lutar();
