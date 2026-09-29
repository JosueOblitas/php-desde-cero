<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Inventario.php';

final class InventarioTest extends TestCase
{
    public function testModificaStockSinVolverseNegativo(): void
    {
        $inventario = new Inventario(3);
        self::assertTrue($inventario->agregar(2));
        self::assertTrue($inventario->retirar(4));
        self::assertFalse($inventario->retirar(2));
        self::assertSame(1, $inventario->stock());
    }

    public function testRechazaStockInicialNegativo(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Inventario(-1);
    }
}
