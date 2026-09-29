<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/leer-opciones.php';

final class LeerOpcionesTest extends TestCase
{
    public function testExtraeOpcionesYOmitePosicionales(): void
    {
        self::assertSame(
            ['nombre' => 'Ada', 'modo' => 'rapido', 'vacio' => ''],
            leer_opciones(['script.php', '--nombre=Ada', 'suelto', '--modo=rapido', '--vacio=', '--'])
        );
    }
}
