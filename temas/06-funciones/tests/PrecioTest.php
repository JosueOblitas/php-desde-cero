<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/calcular-precio.php';

final class PrecioTest extends TestCase
{
    public function testUsaElDescuentoPredeterminado(): void
    {
        self::assertSame(90.0, calcular_precio_final(100.0));
    }

    public function testAceptaUnDescuentoIndicado(): void
    {
        self::assertSame(75.0, calcular_precio_final(100.0, 25.0));
    }
}
