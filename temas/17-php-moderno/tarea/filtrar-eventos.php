<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/17-php-moderno/tests/FiltrarEventosTest.php

/** @param iterable<array{estado:string}> $eventos @return Generator<mixed> */
function filtrar_eventos(iterable $eventos, string $estado, callable $transformar): Generator
{
    // TODO: produce con yield solo eventos del estado pedido, transformados uno a uno.
    if (false) {
        yield null;
    }
}
