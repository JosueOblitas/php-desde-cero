<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/CarritoSesion.php';

final class CarritoSesionTest extends TestCase
{
    public function testConservaElCarritoEntreObjetos(): void
    {
        $session = [];
        $primero = new CarritoSesion($session);
        $primero->agregar('lapiz', 2);
        $segundo = new CarritoSesion($session);
        $segundo->agregar('lapiz', 1);
        $segundo->agregar('cuaderno', 3);

        self::assertSame(['lapiz' => 3, 'cuaderno' => 3], $segundo->obtener());
        self::assertSame(['carrito' => ['lapiz' => 3, 'cuaderno' => 3]], $session);
    }

    public function testIgnoraProductosOCantidadesInvalidas(): void
    {
        $session = [];
        $carrito = new CarritoSesion($session);
        $carrito->agregar('', 1);
        $carrito->agregar('lapiz', 0);

        self::assertSame([], $carrito->obtener());
    }
}
