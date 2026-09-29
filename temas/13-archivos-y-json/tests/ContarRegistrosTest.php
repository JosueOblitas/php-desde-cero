<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/contar-registros.php';

final class ContarRegistrosTest extends TestCase
{
    public function testCuentaTiposYSeñalaLineasInvalidas(): void
    {
        $ruta = tempnam(sys_get_temp_dir(), 'curso-jsonl-');
        self::assertIsString($ruta);
        try {
            file_put_contents($ruta, "{\"tipo\":\"alta\"}\n\nmal json\n{\"tipo\":\"baja\"}\n{\"tipo\":\"alta\"}\n{\"otro\":1}\n");
            self::assertSame(['tipos' => ['alta' => 2, 'baja' => 1], 'errores' => [3, 6]], contar_registros($ruta));
        } finally {
            unlink($ruta);
        }
    }

    public function testArchivoAusente(): void
    {
        $this->expectException(RuntimeException::class);
        contar_registros(sys_get_temp_dir() . '/curso-jsonl-inexistente-' . bin2hex(random_bytes(8)));
    }
}
