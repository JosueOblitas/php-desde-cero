<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/ComandoExportar.php';

final class ComandoExportarTest extends TestCase
{
    public function testCreaCsvConCamposEscapados(): void
    {
        $csv = (new ComandoExportar())->ejecutar(
            ['exportar.php', '--nombre=Ana, Pérez'],
            ['APP_ENTORNO' => 'produccion']
        );
        $lineas = explode("\n", trim($csv));

        self::assertCount(2, $lineas);
        self::assertSame(['entorno', 'nombre'], str_getcsv($lineas[0]));
        self::assertSame(['produccion', 'Ana, Pérez'], str_getcsv($lineas[1]));
    }

    public function testUsaEntornoLocalPorDefecto(): void
    {
        $csv = (new ComandoExportar())->ejecutar(['exportar.php', '--nombre=Ada'], []);
        $lineas = explode("\n", trim($csv));

        self::assertSame(['local', 'Ada'], str_getcsv($lineas[1] ?? ''));
    }
}
