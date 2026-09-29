<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/14-http-y-sesiones/tests/ValidarFormularioTest.php

function validar_formulario(array $post): array
{
    // TODO: devuelve ['datos' => ['nombre' => ..., 'correo' => ...], 'errores' => [...]].
    // Quita espacios externos; convierte el correo a minúsculas; añade nombre/correo a errores si son inválidos.
    return ['datos' => ['nombre' => '', 'correo' => ''], 'errores' => []];
}
