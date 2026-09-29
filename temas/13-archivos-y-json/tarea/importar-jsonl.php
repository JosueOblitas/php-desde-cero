<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/13-archivos-y-json/tests/ImportarJsonlTest.php

function importar_jsonl(string $ruta): array
{
    // TODO: lee líneas JSON. Conserva objetos válidos y números de línea inválidos (desde 1).
    // Si el archivo no existe, devuelve ambas listas vacías.
    return ['registros' => [], 'errores' => []];
}
