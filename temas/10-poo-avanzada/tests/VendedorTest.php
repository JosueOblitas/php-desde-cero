<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Vendedor.php';

final class VendedorTest extends TestCase
{
    public function testHeredaElSueldoYAnadeComision(): void
    {
        $vendedor = new Vendedor(1000.0, 2000.0, 0.05);

        self::assertInstanceOf(Empleado::class, $vendedor);
        self::assertSame(1100.0, $vendedor->calcularPago());
    }
}
