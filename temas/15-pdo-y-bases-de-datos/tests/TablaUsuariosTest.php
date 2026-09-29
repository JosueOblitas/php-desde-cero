<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/crear-tabla.php';

final class TablaUsuariosTest extends TestCase
{
    public function testCreaLaTablaConCorreoUnico(): void
    {
        $pdo = new PDO('sqlite::memory:');
        crear_tabla_usuarios($pdo);
        self::assertSame(
            'usuarios',
            $pdo->query("SELECT name FROM sqlite_master WHERE type = 'table' AND name = 'usuarios'")->fetchColumn()
        );
        $pdo->exec("INSERT INTO usuarios (correo) VALUES ('ana@example.com')");

        $this->expectException(PDOException::class);
        $pdo->exec("INSERT INTO usuarios (correo) VALUES ('ana@example.com')");
    }
}
