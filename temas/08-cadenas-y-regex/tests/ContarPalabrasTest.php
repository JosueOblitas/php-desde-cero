<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/contar-palabras.php';

final class ContarPalabrasTest extends TestCase
{
    public function testIgnoraLosEspaciosRepetidos(): void
    {
        self::assertSame(3, contar_palabras(" uno   dos\t tres\n"));
    }

    public function testNoCuentaUnaCadenaVacia(): void
    {
        self::assertSame(0, contar_palabras(" \t\n "));
    }
}
