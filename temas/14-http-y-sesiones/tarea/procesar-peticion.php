<?php
declare(strict_types=1);

/** @param array<string,mixed> $datos @return array{estado:int, nombre?:string} */
function procesar_peticion(string $metodo, array $datos): array
{
    // TODO: solo POST; nombre debe ser string no vacío tras trim. Devuelve estado 405, 422 o 200.
    return ['estado' => 405];
}
