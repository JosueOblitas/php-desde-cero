<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/12-namespaces-y-composer/tests/CalculadoraNamespaceTest.php

namespace Curso\Tema12;

use DateTimeImmutable;

final class Calculadora
{
    public function sumarDias(string $fecha, int $dias): string
    {
        // TODO: usa DateTimeImmutable y devuelve la nueva fecha como YYYY-MM-DD.
        return '';
    }
}
