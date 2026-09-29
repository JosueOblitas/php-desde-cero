<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/15-pdo-y-bases-de-datos/tests/ContarUsuariosTest.php

function contar_usuarios(PDO $pdo, string $dominio): int
{
    // TODO: cuenta correos que terminan exactamente en @dominio.
    // Usa prepare/execute y escapa %, _ y \ del dominio antes de usar LIKE.
    return 0;
}
