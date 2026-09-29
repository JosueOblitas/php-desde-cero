<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Contador.php';

final class ContadorTest extends TestCase
{
    public function testEmpiezaEnCeroYPuedeIncrementarse(): void
    {
        $contador = new Contador();
        self::assertSame(0, $contador->valorActual());

        $contador->incrementar();
        $contador->incrementar();

        self::assertSame(2, $contador->valorActual());
    }

    public function testPuedeReiniciarse(): void
    {
        $contador = new Contador();
        $contador->incrementar();
        $contador->reiniciar();

        self::assertSame(0, $contador->valorActual());
    }
}
