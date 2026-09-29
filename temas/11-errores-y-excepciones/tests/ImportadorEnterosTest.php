<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/ImportadorEnteros.php';

final class ImportadorEnterosTest extends TestCase
{
    public function testContinuaDespuesDeEntradasInvalidas(): void
    {
        $resultado = (new ImportadorEnteros())->importar([' 12 ', 'x', '0', '-3', '']);

        self::assertSame(
            ['validos' => [12, 0, -3], 'errores' => [1 => 'x', 4 => '']],
            $resultado
        );
    }

    public function testElLoteVacioDaDosListasVacias(): void
    {
        self::assertSame(['validos' => [], 'errores' => []], (new ImportadorEnteros())->importar([]));
    }
}
