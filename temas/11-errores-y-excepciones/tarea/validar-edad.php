<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/11-errores-y-excepciones/tests/ValidarEdadTest.php

function validar_edad(int $edad): int
{
    // TODO: devuelve la edad si está entre 0 y 130; si no, lanza DomainException.
    return $edad;
}
