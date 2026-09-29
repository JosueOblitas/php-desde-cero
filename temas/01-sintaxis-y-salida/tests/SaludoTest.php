<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/ejercicio.php';

final class SaludoTest extends TestCase
{
    public function testFormaUnSaludoConElNombreRecibido(): void
    {
        self::assertSame('Hola, Ada', saludar('Ada'));
    }

    public function testAceptaOtroNombre(): void
    {
        self::assertSame('Hola, Luis', saludar('Luis'));
    }
}
