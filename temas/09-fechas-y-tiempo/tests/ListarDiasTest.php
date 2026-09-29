<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/listar-dias.php';

final class ListarDiasTest extends TestCase
{
    public function testIncluyeAmbosExtremosYElDiaBisiesto(): void
    {
        self::assertSame(['2024-02-28', '2024-02-29', '2024-03-01'], listar_dias('2024-02-28', '2024-03-01'));
    }

    public function testInicioPosteriorAlFin(): void
    {
        self::assertSame([], listar_dias('2024-03-02', '2024-03-01'));
    }
}
