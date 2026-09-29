<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/sumar-pares-hasta.php';

final class SumarParesTest extends TestCase
{
    public function testSumaLosParesHastaElLimite(): void
    {
        self::assertSame(12, sumar_pares_hasta(7));
        self::assertSame(0, sumar_pares_hasta(1));
    }
}
