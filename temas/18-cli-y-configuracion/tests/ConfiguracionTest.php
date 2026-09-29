<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/obtener-configuracion.php';

final class ConfiguracionTest extends TestCase
{
    public function testLeeYRecortaUnaVariableDisponible(): void
    {
        self::assertSame('produccion', obtener_configuracion(['APP_ENTORNO' => ' produccion '], 'APP_ENTORNO', 'local'));
    }

    public function testUsaPredeterminadoSiFaltaOEstaVacia(): void
    {
        self::assertSame('local', obtener_configuracion([], 'APP_ENTORNO', 'local'));
        self::assertSame('local', obtener_configuracion(['APP_ENTORNO' => '  '], 'APP_ENTORNO', 'local'));
    }
}
