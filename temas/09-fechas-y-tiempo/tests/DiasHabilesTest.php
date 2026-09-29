<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/contar-dias-habiles.php';

final class DiasHabilesTest extends TestCase
{
    public function testCuentaAmbosExtremosYSaltaElFinDeSemana(): void
    {
        self::assertSame(
            2,
            contar_dias_habiles(new DateTimeImmutable('2024-09-27'), new DateTimeImmutable('2024-09-30'))
        );
    }

    public function testDevuelveCeroSiNoHayDiasHabiles(): void
    {
        self::assertSame(
            0,
            contar_dias_habiles(new DateTimeImmutable('2024-09-28'), new DateTimeImmutable('2024-09-29'))
        );
        self::assertSame(
            0,
            contar_dias_habiles(new DateTimeImmutable('2024-09-30'), new DateTimeImmutable('2024-09-27'))
        );
    }
}
