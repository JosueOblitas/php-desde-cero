<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/procesar-peticion.php';

final class ProcesarPeticionTest extends TestCase
{
    public function testProcesaPostConNombreLimpio(): void
    {
        self::assertSame(['estado' => 200, 'nombre' => 'Ada'], procesar_peticion('POST', ['nombre' => ' Ada ']));
    }

    public function testRechazaMetodoYNombreInvalido(): void
    {
        self::assertSame(['estado' => 405], procesar_peticion('GET', ['nombre' => 'Ada']));
        self::assertSame(['estado' => 422], procesar_peticion('POST', ['nombre' => '  ']));
        self::assertSame(['estado' => 422], procesar_peticion('POST', ['nombre' => ['Ada']]));
    }
}
