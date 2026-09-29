<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/calcular-envio.php';

final class EnvioTest extends TestCase
{
    public function testEvaluaLosLimites(): void
    {
        self::assertSame(20.0, calcular_envio(49.99));
        self::assertSame(10.0, calcular_envio(50.0));
        self::assertSame(0.0, calcular_envio(100.0));
    }

    public function testRechazaMontosNegativos(): void
    {
        self::assertNull(calcular_envio(-0.01));
    }
}
