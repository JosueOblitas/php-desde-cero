<?php
declare(strict_types=1);

/** @param array<string,mixed> $datos @return array{errores:array<string,string>, html:?string} */
function validar_perfil(array $datos): array
{
    // TODO: nombre string no vacío tras trim y correo válido con filter_var().
    // Si hay errores, html es null. Si todo vale, devuelve <p>nombre — correo</p> con ambos datos escapados.
    return ['errores' => [], 'html' => null];
}
