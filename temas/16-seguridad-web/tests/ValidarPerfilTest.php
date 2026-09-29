<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/validar-perfil.php';

final class ValidarPerfilTest extends TestCase
{
    public function testValidaYEscapaLaVista(): void
    {
        self::assertSame(['errores' => [], 'html' => '<p>&lt;Ada&gt; — a@ejemplo.com</p>'], validar_perfil([
            'nombre' => ' <Ada> ', 'correo' => 'a@ejemplo.com',
        ]));
    }

    public function testInformaErroresPorCampo(): void
    {
        $resultado = validar_perfil(['nombre' => ' ', 'correo' => 'no-es-correo']);
        self::assertNull($resultado['html']);
        self::assertArrayHasKey('nombre', $resultado['errores']);
        self::assertArrayHasKey('correo', $resultado['errores']);
    }
}
