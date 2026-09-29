<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/crear-presentacion.php';

final class PresentacionTest extends TestCase
{
    public function testUneLosTextosEnUnaPresentacion(): void
    {
        self::assertSame('Hola, soy Ana y estudio PHP.', crear_presentacion('Ana', 'PHP'));
    }

    public function testEscapaDatosQuePodrianInterpretarseComoHtml(): void
    {
        self::assertSame(
            'Hola, soy &lt;Ana&gt; y estudio PHP &amp; HTML.',
            crear_presentacion('<Ana>', 'PHP & HTML')
        );
    }
}
