<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/validar-formulario.php';

final class ValidarFormularioTest extends TestCase
{
    public function testNormalizaUnFormularioValido(): void
    {
        self::assertSame(
            ['datos' => ['nombre' => 'Ana', 'correo' => 'ana@example.com'], 'errores' => []],
            validar_formulario(['nombre' => '  Ana ', 'correo' => ' ANA@EXAMPLE.COM '])
        );
    }

    public function testDevuelveTodosLosErroresEnOrden(): void
    {
        self::assertSame(
            ['datos' => ['nombre' => '', 'correo' => 'mal'], 'errores' => ['nombre', 'correo']],
            validar_formulario(['nombre' => ' ', 'correo' => ' mal '])
        );
    }
}
