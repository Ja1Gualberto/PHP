<?php

class Calculadora{

    private const PI = 3.14;
    public const Version = '1.0.0';

    public static function areaCirculo($raio) {
        return self::PI * $raio *$raio;

        // This = refere instancia da classe(Objeto) This to Var
        // Self = refere a classe em si (Calculadora) Self to const
    }
}

$circulo1 = Calculadora::areaCirculo(3);
echo $circulo1;
echo "Versão da calculadora: ".Calculadora::Version;