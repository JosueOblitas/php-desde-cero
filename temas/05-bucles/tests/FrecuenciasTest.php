<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/tabla-frecuencias.php';

final class FrecuenciasTest extends TestCase
{
    public function testCuentaSinCambiarLasPalabras(): void
    {
        self::assertSame(['PHP' => 2, 'php' => 1, 'web' => 1], tabla_frecuencias(['PHP', 'php', 'PHP', 'web']));
    }

    public function testNoHayPalabras(): void
    {
        self::assertSame([], tabla_frecuencias([]));
    }
}
