<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Contrasena.php';

final class ContrasenaTest extends TestCase
{
    public function testElHashNoGuardaLaClaveEnClaro(): void
    {
        $servicio = new Contrasena();
        $hash = $servicio->crearHash('clave-secreta');

        self::assertNotSame('clave-secreta', $hash);
        self::assertTrue($servicio->verificar('clave-secreta', $hash));
        self::assertFalse($servicio->verificar('otra-clave', $hash));
    }
}
