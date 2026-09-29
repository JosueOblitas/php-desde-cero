<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/17-php-moderno/tests/EstadoHttpTest.php

function clasificar_estado(int $codigo): string
{
    // TODO: usa match: 200 => Correcto, 404 => No encontrado, 500 => Error, resto => Desconocido.
    return 'Desconocido';
}
