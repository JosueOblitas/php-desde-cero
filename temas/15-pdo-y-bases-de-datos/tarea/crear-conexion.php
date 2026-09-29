<?php
declare(strict_types=1);

function crear_conexion(): PDO
{
    // TODO: conecta a sqlite::memory: y activa PDO::ERRMODE_EXCEPTION.
    return new PDO('sqlite::memory:', null, null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]);
}
