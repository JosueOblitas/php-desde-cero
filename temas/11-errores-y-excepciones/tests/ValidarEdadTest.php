<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/validar-edad.php';

final class ValidarEdadTest extends TestCase
{
    public function testAceptaLosExtremos(): void
    {
        self::assertSame(0, validar_edad(0));
        self::assertSame(130, validar_edad(130));
    }

    public function testRechazaUnaEdadNegativa(): void
    {
        $this->expectException(DomainException::class);
        validar_edad(-1);
    }

    public function testRechazaUnaEdadMayorQueCientoTreinta(): void
    {
        $this->expectException(DomainException::class);
        validar_edad(131);
    }
}
