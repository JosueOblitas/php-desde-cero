<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/procesar-lote.php';

final class ProcesarLoteTest extends TestCase
{
    public function testConservaResultadosYErroresPorPosicion(): void
    {
        self::assertSame([2.0, 'División por cero', 1.5], procesar_lote([
            ['a' => 4.0, 'b' => 2.0], ['a' => 1.0, 'b' => 0.0], ['a' => 3.0, 'b' => 2.0],
        ]));
    }

    public function testLoteVacio(): void
    {
        self::assertSame([], procesar_lote([]));
    }
}
