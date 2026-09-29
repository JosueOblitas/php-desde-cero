<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/mayoria-de-edad.php';

final class MayorEdadTest extends TestCase
{
    public function testUsaLosDieciochoComoLimite(): void
    {
        self::assertFalse(es_mayor_de_edad(17));
        self::assertTrue(es_mayor_de_edad(18));
    }
}
