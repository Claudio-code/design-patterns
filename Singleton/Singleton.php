<?php


class Singleton
{
    private static object $instance;

    public static function getInstance(): object
    {
        if (!isset(self::$instance))
        {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}
}

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

var_dump($instance1);
var_dump($instance2);
