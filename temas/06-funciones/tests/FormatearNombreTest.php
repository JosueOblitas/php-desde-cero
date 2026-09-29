<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/formatear-nombre.php';

final class FormatearNombreTest extends TestCase
{
    public function testUsaElSeparadorPredeterminado(): void
    {
        self::assertSame('Ada Lovelace', formatear_nombre('Ada', 'Lovelace'));
    }

    public function testPermiteElegirElSeparador(): void
    {
        self::assertSame('Ada, Lovelace', formatear_nombre('Ada', 'Lovelace', ', '));
    }
}
