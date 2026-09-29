<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/ejercicio.php';

final class NotaTest extends TestCase
{
    public function testClasificaElLimiteDeAprobacion(): void
    {
        self::assertSame('Desaprobado', clasificar_nota(10.99));
        self::assertSame('Aprobado', clasificar_nota(11.0));
    }

    public function testAceptaLosExtremosValidos(): void
    {
        self::assertSame('Desaprobado', clasificar_nota(0.0));
        self::assertSame('Aprobado', clasificar_nota(20.0));
    }

    public function testRechazaNotasFueraDelRango(): void
    {
        self::assertSame('Nota inválida', clasificar_nota(-0.1));
        self::assertSame('Nota inválida', clasificar_nota(20.1));
    }
}
