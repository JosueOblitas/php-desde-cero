<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/calcular-promedio.php';

final class PromedioTest extends TestCase
{
    public function testCalculaElPromedioComoFloat(): void
    {
        self::assertSame(15.0, calcular_promedio([10, 20]));
    }

    public function testDevuelveCeroParaUnArrayVacio(): void
    {
        self::assertSame(0.0, calcular_promedio([]));
    }

    public function testAceptaValoresDecimales(): void
    {
        self::assertSame(1.0, calcular_promedio([0.5, 1.5]));
    }
}
