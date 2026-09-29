<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/generar-reporte.php';

final class GenerarReporteTest extends TestCase
{
    public function testFormatoTexto(): void
    {
        self::assertSame("pan: 2\nleche: 1", generar_reporte([
            ['nombre' => 'pan', 'cantidad' => 2], ['nombre' => 'leche', 'cantidad' => 1],
        ]));
    }

    public function testCsvEscapaComasYComillas(): void
    {
        self::assertSame("nombre,cantidad\n\"pan, grande\",2\n\"dijo \"\"sí\"\"\",1", generar_reporte([
            ['nombre' => 'pan, grande', 'cantidad' => 2], ['nombre' => 'dijo "sí"', 'cantidad' => 1],
        ], 'csv'));
    }

    public function testRechazaFormatoDesconocido(): void
    {
        $this->expectException(InvalidArgumentException::class);
        generar_reporte([], 'xml');
    }
}
