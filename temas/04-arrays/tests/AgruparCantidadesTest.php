<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/agrupar-cantidades.php';

final class AgruparCantidadesTest extends TestCase
{
    public function testAgrupaNombresRepetidos(): void
    {
        self::assertSame(['pan' => 5, 'leche' => 1], agrupar_cantidades([
            ['nombre' => 'pan', 'cantidad' => 2],
            ['nombre' => 'leche', 'cantidad' => 1],
            ['nombre' => 'pan', 'cantidad' => 3],
        ]));
    }

    public function testArrayVacio(): void
    {
        self::assertSame([], agrupar_cantidades([]));
    }
}
