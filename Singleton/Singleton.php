<?php


class VoceSingleton
{
    private static VoceSingleton $instance;

    public static function getInstance(): VoceSingleton
    {
        if (!isset(self::$instance))
        {
            self::$instance = new VoceSingleton();
        }

        return self::$instance;
    }

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}
}

$instance1 = VoceSingleton::getInstance();
$instance2 = VoceSingleton::getInstance();

var_dump($instance1);
var_dump($instance2);
