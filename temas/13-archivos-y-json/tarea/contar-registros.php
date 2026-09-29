<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/13-archivos-y-json/tests/ContarRegistrosTest.php

/** @return array{tipos:array<string,int>, errores:list<int>} */
function contar_registros(string $ruta): array
{
    // TODO: lee JSONL línea por línea. Cuenta el campo string 'tipo'; registra números de línea inválida.
    // Las líneas vacías se ignoran. Si no puede abrirse el archivo, lanza RuntimeException.
    return ['tipos' => [], 'errores' => []];
}
