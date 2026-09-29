<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/RepositorioUsuarios.php';

final class RepositorioUsuariosTest extends TestCase
{
    private PDO $pdo;

    protected function setUp(): void
    {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec('CREATE TABLE usuarios (id INTEGER PRIMARY KEY AUTOINCREMENT, correo TEXT NOT NULL UNIQUE)');
    }

    public function testInsertaYEncuentraUnCorreoConComilla(): void
    {
        $repositorio = new RepositorioUsuarios($this->pdo);
        $id = $repositorio->guardar("o'hara@example.com");

        self::assertGreaterThan(0, $id);
        self::assertSame(['id' => $id, 'correo' => "o'hara@example.com"], $repositorio->buscarPorId($id));
    }

    public function testDevuelveNullSiElIdNoExiste(): void
    {
        self::assertNull((new RepositorioUsuarios($this->pdo))->buscarPorId(999));
    }
}
