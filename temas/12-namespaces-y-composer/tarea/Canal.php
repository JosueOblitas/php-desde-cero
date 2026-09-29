<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/12-namespaces-y-composer/tests/MensajeroTest.php

namespace Curso\Tema12;

interface Canal
{
    public function publicar(string $texto): bool;
}
