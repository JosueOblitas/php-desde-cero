<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/mayor-de-dos.php';

final class MayorDeDosTest extends TestCase
{
    public function testDevuelveElNumeroMasGrande(): void
    {
        self::assertSame(9, mayor_de_dos(4, 9));
        self::assertSame(12, mayor_de_dos(12, 3));
        self::assertSame(7, mayor_de_dos(7, 7));
    }
}
