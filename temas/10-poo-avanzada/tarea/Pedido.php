<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/10-poo-avanzada/tests/PedidoTest.php

final class LineaPedido
{
    public function __construct(
        public readonly string $producto,
        public readonly int $cantidad,
        public readonly float $precioUnitario
    ) {
    }

    public function subtotal(): float
    {
        // TODO: calcula cantidad por precio unitario.
        return 0.0;
    }
}

final class Pedido
{
    /** @param list<LineaPedido> $lineas */
    public function __construct(private array $lineas)
    {
    }

    public function total(): float
    {
        // TODO: suma los subtotales de todas las líneas.
        return 0.0;
    }
}
