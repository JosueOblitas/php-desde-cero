<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/16-seguridad-web/tests/ContrasenaTest.php

final class Contrasena
{
    public function crearHash(string $clave): string
    {
        // TODO: usa password_hash() con el algoritmo predeterminado.
        return $clave;
    }

    public function verificar(string $clave, string $hash): bool
    {
        // TODO: usa password_verify().
        return false;
    }
}
