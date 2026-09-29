<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/dividir.php';

final class DividirTest extends TestCase
{
    public function testDivideConResultadoDecimal(): void
    {
        self::assertSame(2.5, dividir(5.0, 2.0));
    }

    public function testRechazaElDivisorCero(): void
    {
        $this->expectException(InvalidArgumentException::class);
        dividir(5.0, 0.0);
    }
}
