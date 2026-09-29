<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/11-errores-y-excepciones/tests/DividirTest.php

function dividir(float $dividendo, float $divisor): float
{
    // TODO: lanza InvalidArgumentException si el divisor es cero.
    return 0.0;
}
