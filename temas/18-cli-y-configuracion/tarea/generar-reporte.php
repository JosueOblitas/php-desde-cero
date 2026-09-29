<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/18-cli-y-configuracion/tests/GenerarReporteTest.php

/** @param list<array{nombre:string, cantidad:int}> $registros */
function generar_reporte(array $registros, string $formato = 'texto'): string
{
    // TODO: texto: una línea "nombre: cantidad" por registro; CSV: cabecera nombre,cantidad y filas escapadas.
    // Separa líneas con \n, sin salto final. Lanza InvalidArgumentException para otro formato.
    return '';
}
