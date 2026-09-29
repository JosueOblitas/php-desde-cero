<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/resumir-compra.php';

final class ResumenCompraTest extends TestCase
{
    public function testConservaValoresYTipos(): void
    {
        self::assertSame(['cantidad' => 3, 'precio' => 2.5, 'total' => 7.5, 'disponible' => true], resumir_compra(3, 2.5));
    }

    public function testSinUnidades(): void
    {
        self::assertSame(['cantidad' => 0, 'precio' => 4.0, 'total' => 0.0, 'disponible' => false], resumir_compra(0, 4.0));
    }
}
