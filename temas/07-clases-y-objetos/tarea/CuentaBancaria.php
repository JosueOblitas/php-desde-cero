<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/07-clases-y-objetos/tests/CuentaBancariaTest.php

final class CuentaBancaria
{
    private float $saldo;

    public function __construct(float $saldoInicial = 0.0)
    {
        $this->saldo = $saldoInicial;
    }

    public function obtenerSaldo(): float
    {
        // TODO: devuelve el saldo actual.
        return 0.0;
    }

    public function depositar(float $monto): bool
    {
        // TODO: acepta solo montos positivos y actualiza el saldo si el depósito funciona.
        return false;
    }

    public function retirar(float $monto): bool
    {
        // TODO: acepta montos positivos que no superen el saldo disponible.
        return false;
    }
}
