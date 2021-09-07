<?php

require_once "Figura.php";
require_once "Oval.php";
require_once "Linha.php";

class FiguraFactory
{
    private static array $figuras = [];

    public static function getFigura(string $nome): Figura
    {
        if (array_key_exists($nome, self::$figuras)) {
            return self::$figuras[$nome];
        }

        self::$figuras[$nome] = match ($nome) {
            "Oval preenchida" => new Oval(true),
            "Oval nao preenchida" => new Oval(false),
            "Linha" => new Linha(),
        };

        return self::$figuras[$nome];
    }
}