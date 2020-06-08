<?php

require_once "FrameWork.php";
require_once "BuilderInterface.php";

class FrameworkFullBuilder implements BuilderInterface
{
    private FrameWork $framework;

    public function __construct()
    {
        $this->framework = new FrameWork();

        $this->buildName();
        $this->getFramework();
        $this->buildDb();
        $this->buildDb();
        $this->buildTests();
        $this->buildFull();
    }

    public function buildName(): void
    {
        $this->framework->setName("frame");
    }

    public function buildDb(): void
    {
        $this->framework->setDb("mysql");
        $this->framework->setDbhost("localhost");
        $this->framework->setDbpassword("passwd");
        $this->framework->setDbhost("localhost");
    }

    public function buildWebpack(): void
    {
        $this->framework->setWebpack(true);
    }

    public function buildTests(): void
    {
        $this->framework->setTests(true);
    }

    public function buildFull(): void
    {
        $this->framework->setFull(true);
    }

    /**
     * @return FrameWork
     */
    public function getFramework(): FrameWork
    {
        return $this->framework;
    }
}