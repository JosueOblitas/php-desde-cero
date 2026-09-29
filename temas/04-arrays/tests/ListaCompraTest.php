<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/lista-compra.php';

final class ListaCompraTest extends TestCase
{
    public function testConservaElOrdenDeLosProductos(): void
    {
        self::assertSame(['pan', 'leche'], crear_lista_compra('pan', 'leche'));
    }
}
