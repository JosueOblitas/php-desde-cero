<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/extraer-etiquetas.php';

final class EtiquetasTest extends TestCase
{
    public function testExtraeUnicodeYEliminaRepeticiones(): void
    {
        self::assertSame(['#php', '#niñez'], extraer_etiquetas('Aprende #PHP y #Niñez con #php'));
    }

    public function testIgnoraSimbolosSinEtiqueta(): void
    {
        self::assertSame([], extraer_etiquetas('Solo # y #123'));
    }
}
