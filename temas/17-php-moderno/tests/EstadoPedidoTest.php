<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/EstadoPedido.php';

final class EstadoPedidoTest extends TestCase
{
    public function testTieneValoresPersistiblesYEtiquetas(): void
    {
        self::assertSame('pagado', EstadoPedido::Pagado->value);
        self::assertSame(EstadoPedido::Nuevo, EstadoPedido::from('nuevo'));
        self::assertSame('Nuevo', EstadoPedido::Nuevo->etiqueta());
        self::assertSame('Pagado', EstadoPedido::Pagado->etiqueta());
        self::assertSame('Cancelado', EstadoPedido::Cancelado->etiqueta());
    }
}
