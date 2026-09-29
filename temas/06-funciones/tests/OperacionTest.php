<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/aplicar-operacion.php';

final class OperacionTest extends TestCase
{
    public function testTresOperaciones(): void
    {
        self::assertSame(5.0, aplicar_operacion(2.0, 3.0, 'sumar'));
        self::assertSame(-1.0, aplicar_operacion(2.0, 3.0, 'restar'));
        self::assertSame(6.0, aplicar_operacion(2.0, 3.0, 'multiplicar'));
    }

    public function testOperacionDesconocida(): void
    {
        self::assertNull(aplicar_operacion(2.0, 0.0, 'dividir'));
    }
}
