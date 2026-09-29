<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/12-namespaces-y-composer/tests/SaludoNamespaceTest.php

namespace Curso\Tema12;

final class Saludo
{
    public function decir(string $nombre): string
    {
        // TODO: devuelve "Hola, " seguido del nombre.
        return '';
    }
}
