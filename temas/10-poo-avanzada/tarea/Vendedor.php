<?php
declare(strict_types=1);

abstract class Empleado
{
    public function __construct(protected float $sueldoBase)
    {
    }

    abstract public function calcularPago(): float;
}

final class Vendedor extends Empleado
{
    public function __construct(
        float $sueldoBase,
        private float $ventas,
        private float $comision
    ) {
        parent::__construct($sueldoBase);
    }

    public function calcularPago(): float
    {
        // TODO: suma al sueldo base el porcentaje de comisión sobre las ventas.
        return $this->sueldoBase;
    }
}
