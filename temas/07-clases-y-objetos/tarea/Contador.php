<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/07-clases-y-objetos/tests/ContadorTest.php

final class Contador
{
    private int $valor = 0;

    public function incrementar(): void
    {
        // TODO: aumenta el valor en uno.
    }

    public function valorActual(): int
    {
        // TODO: devuelve el valor actual.
        return 0;
    }

    public function reiniciar(): void
    {
        // TODO: vuelve el valor a cero.
    }
}
