<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/validar-codigo.php';

final class ValidarCodigoTest extends TestCase
{
    public function testAceptaSoloElFormatoCompleto(): void
    {
        self::assertTrue(validar_codigo('PE-123'));
        self::assertFalse(validar_codigo('pe-123'));
        self::assertFalse(validar_codigo('PE-1234'));
        self::assertFalse(validar_codigo("PE-123\n"));
    }
}
