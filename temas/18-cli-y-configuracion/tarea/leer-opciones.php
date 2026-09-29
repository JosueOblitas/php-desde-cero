<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/18-cli-y-configuracion/tests/LeerOpcionesTest.php

function leer_opciones(array $argv): array
{
    // TODO: omite el nombre del script. Convierte --clave=valor en ['clave' => 'valor'].
    // Ignora argumentos posicionales o sin una clave.
    return [];
}
