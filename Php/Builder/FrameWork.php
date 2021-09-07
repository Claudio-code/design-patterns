<?php

class FrameWork
{
    private string $name;
    private string $db;
    private string $dbuser;
    private string $dbpassword;
    private string $dbhost;
    private bool $tests;
    private bool $webpack;
    private bool $full;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): FrameWork
    {
        $this->name = $name;

        return $this;
    }

    public function getDb(): string
    {
        return $this->db;
    }

    public function setDb(string $db): FrameWork
    {
        $this->db = $db;

        return $this;
    }

    public function getDbuser(): string
    {
        return $this->dbuser;
    }

    public function setDbuser(string $dbuser): FrameWork
    {
        $this->dbuser = $dbuser;

        return $this;
    }

    public function getDbpassword(): string
    {
        return $this->dbpassword;
    }

    public function setDbpassword(string $dbpassword): FrameWork
    {
        $this->dbpassword = $dbpassword;

        return $this;
    }

    public function getDbhost(): string
    {
        return $this->dbhost;
    }

    public function setDbhost(string $dbhost): FrameWork
    {
        $this->dbhost = $dbhost;

        return $this;
    }

    public function getTests(): bool
    {
        return $this->tests;
    }

    public function setTests(bool $tests): FrameWork
    {
        $this->tests = $tests;

        return $this;
    }

    public function isWebpack(): bool
    {
        return $this->webpack;
    }

    public function setWebpack(bool $webpack): FrameWork
    {
        $this->webpack = $webpack;

        return $this;
    }

    public function isFull(): bool
    {
        return $this->full;
    }

    public function setFull(bool $full): FrameWork
    {
        $this->full = $full;

        return $this;
    }
}
