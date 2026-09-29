<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/14-http-y-sesiones/tests/ProcesarPeticionTest.php

/** @param array<string,mixed> $datos @return array{estado:int, nombre?:string} */
function procesar_peticion(string $metodo, array $datos): array
{
    // TODO: solo POST; nombre debe ser string no vacío tras trim. Devuelve estado 405, 422 o 200.
    return ['estado' => 405];
}
