<?php

abstract class Command
{
    abstract public function execute(): void;
    abstract public function undo(): void;
}
