<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Producto.php';

final class ProductoTest extends TestCase
{
    public function testGuardaYExponeElNombre(): void
    {
        $producto = new Producto('Teclado', 100.0);

        self::assertSame('Teclado', $producto->obtenerNombre());
    }

    public function testCalculaElPrecioConDescuentoValido(): void
    {
        $producto = new Producto('Teclado', 100.0);

        self::assertSame(80.0, $producto->precioConDescuento(20.0));
    }

    public function testIgnoraUnPorcentajeFueraDelRango(): void
    {
        $producto = new Producto('Teclado', 100.0);

        self::assertSame(100.0, $producto->precioConDescuento(-5.0));
        self::assertSame(100.0, $producto->precioConDescuento(101.0));
    }
}
