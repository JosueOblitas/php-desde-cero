<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/15-pdo-y-bases-de-datos/tests/ConexionTest.php

function crear_conexion(): PDO
{
    // TODO: conecta a sqlite::memory: y activa PDO::ERRMODE_EXCEPTION.
    return new PDO('sqlite::memory:', null, null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
}
