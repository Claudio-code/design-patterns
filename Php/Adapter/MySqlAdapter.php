<?php

require_once 'DbAdapter.php';

require_once 'MySqlCommands.php';

class MySqlAdapter implements DbAdapter
{
    private MySqlCommands $mysql;

    public function __construct(MySqlCommands $mysql)
    {
        $this->mysql = $mysql;
    }

    public function insert(): void
    {
        $this->mysql->insertMySQL();
    }

    public function update(): void
    {
        $this->mysql->updateMySQL();
    }

    public function delete(): void
    {
        $this->mysql->deleteMySQL();
    }
}
