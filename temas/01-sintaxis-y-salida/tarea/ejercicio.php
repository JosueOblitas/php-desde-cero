<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/01-sintaxis-y-salida/tests/SaludoTest.php

function saludar(string $nombre): string
{
    // TODO: devuelve el texto "Hola, " seguido del nombre recibido.
    return 'Hola, ' . $nombre;
}
