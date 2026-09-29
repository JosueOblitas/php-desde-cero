<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/guardar-json.php';

final class GuardarJsonTest extends TestCase
{
    public function testEscribeJsonValidoConUnicode(): void
    {
        $ruta = sys_get_temp_dir() . '/php-curso-' . bin2hex(random_bytes(8));
        try {
            self::assertTrue(guardar_json($ruta, ['pais' => 'Perú', 'activo' => true]));
            $contenido = file_get_contents($ruta);
            self::assertIsString($contenido);
            self::assertStringContainsString('Perú', $contenido);
            self::assertSame(['pais' => 'Perú', 'activo' => true], json_decode($contenido, true, 512, JSON_THROW_ON_ERROR));
        } finally {
            if (is_file($ruta)) {
                unlink($ruta);
            }
        }
    }
}
