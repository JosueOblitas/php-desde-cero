<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/17-php-moderno/tests/CrearLotesTest.php

function crear_lotes(iterable $valores, int $tamano, ?callable $transformar = null): Generator
{
    // TODO: si tamaño es menor que 1, lanza InvalidArgumentException.
    // Recorre la entrada perezosamente, aplica $transformar si se indica y produce lotes.
    if (false) {
        yield [];
    }
}
