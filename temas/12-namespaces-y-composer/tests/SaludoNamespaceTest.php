<?php
declare(strict_types=1);

use Curso\Tema12\Saludo;
use PHPUnit\Framework\TestCase;

final class SaludoNamespaceTest extends TestCase
{
    public function testComposerCargaLaClasePorSuNamespace(): void
    {
        self::assertSame('Hola, Ada', (new Saludo())->decir('Ada'));
    }
}
