<?php
declare(strict_types=1);

final class RepositorioUsuarios
{
    public function __construct(private PDO $pdo)
    {
    }

    public function guardar(string $correo): int
    {
        // TODO: inserta con prepare/execute y devuelve el nuevo id.
        return 0;
    }

    public function buscarPorId(int $id): ?array
    {
        // TODO: devuelve ['id' => int, 'correo' => string] o null si no existe.
        return null;
    }
}
