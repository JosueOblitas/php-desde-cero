<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/07-clases-y-objetos/tests/ProductoTest.php

final class Producto
{
    private string $nombre;
    private float $precio;

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function obtenerNombre(): string
    {
        // TODO: devuelve el nombre guardado.
        return '';
    }

    public function precioConDescuento(float $porcentaje): float
    {
        // TODO: aplica el porcentaje si está entre 0 y 100; si no, conserva el precio.
        return $this->precio;
    }
}
