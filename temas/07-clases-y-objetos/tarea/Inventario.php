<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/07-clases-y-objetos/tests/InventarioTest.php

final class Inventario
{
    public function __construct(private int $stock = 0)
    {
        // TODO: rechaza stock inicial negativo con InvalidArgumentException.
    }

    public function stock(): int
    {
        // TODO: devuelve el stock actual.
        return 0;
    }

    public function agregar(int $unidades): bool
    {
        // TODO: devuelve false si unidades <= 0; si son válidas, suma y devuelve true.
        return false;
    }

    public function retirar(int $unidades): bool
    {
        // TODO: devuelve false si unidades <= 0 o superan el stock; en otro caso retira y devuelve true.
        return false;
    }
}
