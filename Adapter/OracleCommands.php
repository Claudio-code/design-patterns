<?php

require_once "DbAdapter.php";

class OracleCommands implements DbAdapter
{

    public function insert(): void
    {
        echo "Insert from Oracle";
    }

    public function update(): void
    {
        echo "Update from Oracle";
    }

    public function delete(): void
    {
        echo "Delete from Oracle";
    }
}