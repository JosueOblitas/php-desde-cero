<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/contar-usuarios.php';

final class ContarUsuariosTest extends TestCase
{
    public function testCuentaSoloElDominioExacto(): void
    {
        $pdo = new PDO('sqlite::memory:');
        $pdo->exec('CREATE TABLE usuarios (correo TEXT NOT NULL)');
        $insertar = $pdo->prepare('INSERT INTO usuarios (correo) VALUES (?)');
        foreach (['a@ejemplo.com', 'b@ejemplo.com', 'c@otro.com', 'd@ejemploXcom'] as $correo) {
            $insertar->execute([$correo]);
        }
        self::assertSame(2, contar_usuarios($pdo, 'ejemplo.com'));
        self::assertSame(1, contar_usuarios($pdo, 'otro.com'));
    }

    public function testTrataElGuionBajoComoCaracterLiteral(): void
    {
        $pdo = new PDO('sqlite::memory:');
        $pdo->exec("CREATE TABLE usuarios (correo TEXT NOT NULL); INSERT INTO usuarios (correo) VALUES ('a@a_b.com'), ('b@axb.com')");
        self::assertSame(1, contar_usuarios($pdo, 'a_b.com'));
    }
}
