<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Pedido.php';

final class PedidoTest extends TestCase
{
    public function testCadaLineaCalculaSuSubtotal(): void
    {
        self::assertSame(20.0, (new LineaPedido('A', 2, 10.0))->subtotal());
    }

    public function testElPedidoSumaTodasLasLineas(): void
    {
        $pedido = new Pedido([
            new LineaPedido('A', 2, 10.0),
            new LineaPedido('B', 1, 5.0),
        ]);

        self::assertSame(25.0, $pedido->total());
        self::assertSame(0.0, (new Pedido([]))->total());
    }
}
