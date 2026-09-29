<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/clasificar-estado.php';

final class EstadoHttpTest extends TestCase
{
    public function testClasificaCasosConocidosYDesconocidos(): void
    {
        self::assertSame('Correcto', clasificar_estado(200));
        self::assertSame('No encontrado', clasificar_estado(404));
        self::assertSame('Error', clasificar_estado(500));
        self::assertSame('Desconocido', clasificar_estado(418));
    }
}
