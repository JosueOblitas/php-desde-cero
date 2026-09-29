<?php
declare(strict_types=1);

function obtener_configuracion(array $entorno, string $clave, string $predeterminado): string
{
    // TODO: usa el valor de entorno si es string no vacío tras trim; si no, el predeterminado.
    return $predeterminado;
}
