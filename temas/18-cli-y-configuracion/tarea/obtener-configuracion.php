<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/18-cli-y-configuracion/tests/ConfiguracionTest.php

function obtener_configuracion(array $entorno, string $clave, string $predeterminado): string
{
    // TODO: usa el valor de entorno si es string no vacío tras trim; si no, el predeterminado.
    return $predeterminado;
}
