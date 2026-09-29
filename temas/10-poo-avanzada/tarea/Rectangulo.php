<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/10-poo-avanzada/tests/RectanguloTest.php

interface AreaCalculable
{
    public function area(): float;
}

final class Rectangulo implements AreaCalculable
{
    public function __construct(
        private float $ancho,
        private float $alto
    ) {
    }

    public function area(): float
    {
        // TODO: devuelve ancho multiplicado por alto.
        return 0.0;
    }
}
