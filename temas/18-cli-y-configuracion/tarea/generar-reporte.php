<?php
declare(strict_types=1);

/** @param list<array{nombre:string, cantidad:int}> $registros */
function generar_reporte(array $registros, string $formato = 'texto'): string
{
    // TODO: texto: una línea "nombre: cantidad" por registro; CSV: cabecera nombre,cantidad y filas escapadas.
    // Separa líneas con \n, sin salto final. Lanza InvalidArgumentException para otro formato.
    return '';
}
