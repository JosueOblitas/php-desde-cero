<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/minutos-a-segundos.php';

final class MinutosTest extends TestCase
{
    public function testConvierteMinutosEnSegundos(): void
    {
        self::assertSame(180, minutos_a_segundos(3));
        self::assertIsInt(minutos_a_segundos(3));
    }
}
