<?php
declare(strict_types=1);

use Curso\Tema12\Etiqueta;
use PHPUnit\Framework\TestCase;

final class EtiquetaNamespaceTest extends TestCase
{
    public function testComposerCargaLaClase(): void
    {
        self::assertSame('[PHP]', (new Etiqueta(' PHP '))->representar());
    }

    public function testTextoVacio(): void
    {
        self::assertSame('[]', (new Etiqueta('   '))->representar());
    }
}
