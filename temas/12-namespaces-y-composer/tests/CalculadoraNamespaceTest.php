<?php
declare(strict_types=1);

use Curso\Tema12\Calculadora;
use PHPUnit\Framework\TestCase;

final class CalculadoraNamespaceTest extends TestCase
{
    public function testImportaLaClaseDeFechaYCalculaUnCambioDeMes(): void
    {
        self::assertSame('2024-03-01', (new Calculadora())->sumarDias('2024-02-28', 2));
    }
}
