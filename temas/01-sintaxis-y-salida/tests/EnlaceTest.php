<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/crear-enlace.php';

final class EnlaceTest extends TestCase
{
    public function testConstruyeUnEnlace(): void
    {
        self::assertSame('<a href="/curso">Empezar</a>', crear_enlace('/curso', 'Empezar'));
    }

    public function testEscapaUrlYTexto(): void
    {
        self::assertSame('<a href="/?q=&quot;php&quot;&amp;x=1">&lt;PHP&gt;</a>', crear_enlace('/?q="php"&x=1', '<PHP>'));
    }
}
