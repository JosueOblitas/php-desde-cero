<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/12-namespaces-y-composer/tests/MensajeroTest.php

namespace Curso\Tema12;

final class Mensajero
{
    public function __construct(private Canal $canal)
    {
    }

    public function enviar(string $mensaje): bool
    {
        // TODO: usa trim; si queda vacío devuelve false. Si no, publica y devuelve el resultado.
        return false;
    }
}
