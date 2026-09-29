<?php
declare(strict_types=1);

final class ImportadorEnteros
{
    /**
     * @param list<string> $lineas
     * @return array{validos: list<int>, errores: array<int, string>}
     */
    public function importar(array $lineas): array
    {
        // TODO: procesa todas las líneas. Guarda índices cero-basados de líneas inválidas.
        return ['validos' => [], 'errores' => []];
    }

    private function convertir(string $linea): int
    {
        // TODO: acepta enteros con signo tras trim; lanza InvalidArgumentException para lo demás.
        return 0;
    }
}
