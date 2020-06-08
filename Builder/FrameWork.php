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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return FrameWork
     */
    public function setName(string $name): FrameWork
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * @param string $db
     * @return FrameWork
     */
    public function setDb(string $db): FrameWork
    {
        $this->db = $db;
        return $this;
    }

    /**
     * @return string
     */
    public function getDbuser(): string
    {
        return $this->dbuser;
    }

    /**
     * @param string $dbuser
     * @return FrameWork
     */
    public function setDbuser(string $dbuser): FrameWork
    {
        $this->dbuser = $dbuser;
        return $this;
    }

    /**
     * @return string
     */
    public function getDbpassword(): string
    {
        return $this->dbpassword;
    }

    /**
     * @param string $dbpassword
     * @return FrameWork
     */
    public function setDbpassword(string $dbpassword): FrameWork
    {
        $this->dbpassword = $dbpassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getDbhost(): string
    {
        return $this->dbhost;
    }

    /**
     * @param string $dbhost
     * @return FrameWork
     */
    public function setDbhost(string $dbhost): FrameWork
    {
        $this->dbhost = $dbhost;
        return $this;
    }

    /**
     * @return bool
     */
    public function getTests(): bool
    {
        return $this->tests;
    }

    /**
     * @param bool $tests
     * @return FrameWork
     */
    public function setTests(bool $tests): FrameWork
    {
        $this->tests = $tests;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWebpack(): bool
    {
        return $this->webpack;
    }

    /**
     * @param bool $webpack
     * @return FrameWork
     */
    public function setWebpack(bool $webpack): FrameWork
    {
        $this->webpack = $webpack;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFull(): bool
    {
        return $this->full;
    }

    /**
     * @param bool $full
     * @return FrameWork
     */
    public function setFull(bool $full): FrameWork
    {
        $this->full = $full;
        return $this;
    }
}