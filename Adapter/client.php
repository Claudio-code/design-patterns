<?php

require_once 'OracleCommands.php';

require_once 'MySqlCommands.php';

require_once 'MySqlAdapter.php';

$oracle = new OracleCommands();
$oracle->insert();

$mysql = new MySqlAdapter(new MySqlCommands());
$mysql->insert();
