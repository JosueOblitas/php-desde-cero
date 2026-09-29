<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/escapar-html.php';

final class EscaparHtmlTest extends TestCase
{
    public function testConvierteEtiquetasYComillasEnTextoSeguro(): void
    {
        self::assertSame(
            '&lt;script&gt;&quot;hola&quot;&lt;/script&gt;',
            escapar_html('<script>"hola"</script>')
        );
    }

    public function testConservaElTextoUnicode(): void
    {
        self::assertSame('Perú &amp; PHP', escapar_html('Perú & PHP'));
    }
}
