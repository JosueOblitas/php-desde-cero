<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/ejercicio.php';

final class FichaTest extends TestCase
{
    public function testDevuelveLosDatosConSusTipos(): void
    {
        $ficha = crear_ficha('Ada', 36, 1.68, true);

        self::assertSame([
            'nombre' => 'Ada',
            'edad' => 36,
            'estatura' => 1.68,
            'activo' => true,
        ], $ficha);
        self::assertIsString($ficha['nombre']);
        self::assertIsInt($ficha['edad']);
        self::assertIsFloat($ficha['estatura']);
        self::assertIsBool($ficha['activo']);
    }

    public function testPuedeRepresentarUnaPersonaInactiva(): void
    {
        self::assertSame([
            'nombre' => 'Luis',
            'edad' => 20,
            'estatura' => 1.75,
            'activo' => false,
        ], crear_ficha('Luis', 20, 1.75, false));
    }
}
