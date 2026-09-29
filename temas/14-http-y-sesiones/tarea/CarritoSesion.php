<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/14-http-y-sesiones/tests/CarritoSesionTest.php

final class CarritoSesion
{
    private array $session;

    public function __construct(array &$session)
    {
        $this->session =& $session;
    }

    public function agregar(string $producto, int $cantidad): void
    {
        // TODO: ignora producto vacío o cantidad no positiva. Acumula cantidades en session['carrito'].
    }

    public function obtener(): array
    {
        // TODO: devuelve el carrito guardado, o [] si todavía no existe.
        return [];
    }
}
