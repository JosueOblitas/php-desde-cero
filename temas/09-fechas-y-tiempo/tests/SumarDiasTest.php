<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/sumar-dias.php';

final class SumarDiasTest extends TestCase
{
    public function testCruzaElCambioDeMesSinModificarElOriginal(): void
    {
        $original = new DateTimeImmutable('2024-02-28');
        $resultado = sumar_dias($original, 2);

        self::assertSame('2024-03-01', $resultado->format('Y-m-d'));
        self::assertSame('2024-02-28', $original->format('Y-m-d'));
        self::assertNotSame($original, $resultado);
    }

    public function testAdmiteDiasNegativos(): void
    {
        self::assertSame('2023-12-31', sumar_dias(new DateTimeImmutable('2024-01-01'), -1)->format('Y-m-d'));
    }
}
