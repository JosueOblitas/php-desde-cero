<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/actualizar-stock.php';

final class StockTest extends TestCase
{
    public function testActualizaUnaClaveYConservaLasDemas(): void
    {
        self::assertSame(
            ['lapiz' => 10, 'cuaderno' => 4],
            actualizar_stock(['lapiz' => 3, 'cuaderno' => 4], 'lapiz', 10)
        );
    }

    public function testAgregaUnProductoQueNoEstabaEnElArray(): void
    {
        self::assertSame(['lapiz' => 10], actualizar_stock([], 'lapiz', 10));
    }
}
