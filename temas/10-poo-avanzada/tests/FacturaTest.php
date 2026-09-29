<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Factura.php';

final class FacturaTest extends TestCase
{
    public function testSumaLineasEImpuesto(): void
    {
        $factura = new Factura([new LineaFactura(2, 10.0), new LineaFactura(1, 5.0)], 0.2);
        self::assertSame(25.0, $factura->subtotal());
        self::assertSame(30.0, $factura->total());
    }

    public function testFacturaVacia(): void
    {
        self::assertSame(0.0, (new Factura([]))->total());
    }

    public function testRechazaTasaNegativa(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Factura([], -0.1);
    }

    public function testRechazaLineaInvalida(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new LineaFactura(0, 5.0);
    }
}
