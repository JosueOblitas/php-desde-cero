<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/CuentaBancaria.php';

final class CuentaBancariaTest extends TestCase
{
    public function testAceptaDepositosPositivos(): void
    {
        $cuenta = new CuentaBancaria(100.0);

        self::assertTrue($cuenta->depositar(50.0));
        self::assertSame(150.0, $cuenta->obtenerSaldo());
    }

    public function testRechazaDepositosNoPositivos(): void
    {
        $cuenta = new CuentaBancaria(100.0);

        self::assertFalse($cuenta->depositar(0.0));
        self::assertSame(100.0, $cuenta->obtenerSaldo());
    }

    public function testRetiraSoloSiHaySaldoSuficiente(): void
    {
        $cuenta = new CuentaBancaria(100.0);

        self::assertTrue($cuenta->retirar(60.0));
        self::assertSame(40.0, $cuenta->obtenerSaldo());
        self::assertFalse($cuenta->retirar(50.0));
        self::assertSame(40.0, $cuenta->obtenerSaldo());
    }

    public function testRechazaMontoNegativoYPermiteRetirarTodoElSaldo(): void
    {
        $cuenta = new CuentaBancaria(20.0);

        self::assertFalse($cuenta->depositar(-5.0));
        self::assertFalse($cuenta->retirar(-5.0));
        self::assertTrue($cuenta->retirar(20.0));
        self::assertSame(0.0, $cuenta->obtenerSaldo());
    }
}
