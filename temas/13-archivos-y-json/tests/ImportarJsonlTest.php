<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/importar-jsonl.php';

final class ImportarJsonlTest extends TestCase
{
    public function testContinuaDespuesDeUnaLineaMalFormada(): void
    {
        $ruta = sys_get_temp_dir() . '/php-curso-' . bin2hex(random_bytes(8));
        file_put_contents($ruta, "{\"id\":1}\nmal-json\n{\"id\":2}\n");
        try {
            self::assertSame(
                ['registros' => [['id' => 1], ['id' => 2]], 'errores' => [2]],
                importar_jsonl($ruta)
            );
        } finally {
            unlink($ruta);
        }
    }

    public function testArchivoAusenteProduceDosListasVacias(): void
    {
        self::assertSame(
            ['registros' => [], 'errores' => []],
            importar_jsonl(sys_get_temp_dir() . '/no-existe-' . bin2hex(random_bytes(8)))
        );
    }
}
