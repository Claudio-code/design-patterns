<?php

interface BuilderInterface
{
    public function buildName(): void;

    public function buildDb(): void;

    public function buildWebpack(): void;

    public function buildTests(): void;

    public function buildFull(): void;
}
