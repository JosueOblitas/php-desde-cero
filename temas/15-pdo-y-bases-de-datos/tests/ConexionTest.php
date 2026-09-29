<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/crear-conexion.php';

final class ConexionTest extends TestCase
{
    public function testAbreSqliteConErroresComoExcepciones(): void
    {
        $pdo = crear_conexion();

        self::assertSame('sqlite', $pdo->getAttribute(PDO::ATTR_DRIVER_NAME));
        self::assertSame(PDO::ERRMODE_EXCEPTION, $pdo->getAttribute(PDO::ATTR_ERRMODE));
    }
}
