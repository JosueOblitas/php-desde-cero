<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/formatear-fecha.php';

final class FormatearFechaTest extends TestCase
{
    public function testFormateaUnaFechaBisiesta(): void
    {
        self::assertSame('29/02/2024', formatear_fecha('2024-02-29'));
    }
}
