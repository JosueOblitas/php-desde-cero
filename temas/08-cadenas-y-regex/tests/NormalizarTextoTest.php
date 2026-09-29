<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/normalizar-texto.php';

final class NormalizarTextoTest extends TestCase
{
    public function testConservaUnicodeYQuitaEspaciosExternos(): void
    {
        self::assertSame('árbol y php', normalizar_texto("  ÁRBOL y PHP \n"));
    }

    public function testElTextoVacioSigueVacio(): void
    {
        self::assertSame('', normalizar_texto(" \t "));
    }
}
