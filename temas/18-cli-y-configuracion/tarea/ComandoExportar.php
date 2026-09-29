<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/18-cli-y-configuracion/tests/ComandoExportarTest.php

final class ComandoExportar
{
    public function ejecutar(array $argv, array $entorno): string
    {
        // TODO: lee --nombre=... y APP_ENTORNO (por defecto 'local').
        // Devuelve un CSV de dos filas: encabezado entorno,nombre y valores.
        // Usa fputcsv() sobre php://temp para escapar comas y comillas.
        return '';
    }
}
