<?php
declare(strict_types=1);

final class LineaFactura
{
    public function __construct(public readonly int $cantidad, public readonly float $precioUnitario)
    {
        // TODO: rechaza cantidad <= 0 o precio negativo con InvalidArgumentException.
    }

    public function subtotal(): float
    {
        // TODO: calcula cantidad por precio unitario.
        return 0.0;
    }
}

final class Factura
{
    /** @param list<LineaFactura> $lineas */
    public function __construct(private array $lineas, private float $tasaImpuesto = 0.18)
    {
        // TODO: rechaza una tasa negativa con InvalidArgumentException.
    }

    public function subtotal(): float
    {
        // TODO: suma el subtotal de cada LineaFactura.
        return 0.0;
    }

    public function total(): float
    {
        // TODO: suma el impuesto al subtotal.
        return 0.0;
    }
}
