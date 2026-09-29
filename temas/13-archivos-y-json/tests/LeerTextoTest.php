<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/leer-texto.php';

final class LeerTextoTest extends TestCase
{
    public function testLeeElContenidoDeUnArchivo(): void
    {
        $ruta = sys_get_temp_dir() . '/php-curso-' . bin2hex(random_bytes(8));
        file_put_contents($ruta, "Hola\nPHP");
        try {
            self::assertSame("Hola\nPHP", leer_texto($ruta));
        } finally {
            unlink($ruta);
        }
    }

    public function testDevuelveVacioSiElArchivoNoExiste(): void
    {
        self::assertSame('', leer_texto(sys_get_temp_dir() . '/no-existe-' . bin2hex(random_bytes(8))));
    }
}
