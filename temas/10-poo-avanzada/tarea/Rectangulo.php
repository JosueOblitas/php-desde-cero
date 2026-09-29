<?php
declare(strict_types=1);

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
