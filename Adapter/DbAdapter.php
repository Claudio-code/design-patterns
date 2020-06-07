<?php


interface DbAdapter
{
    public function insert(): void;
    public function update(): void;
    public function delete(): void;
}