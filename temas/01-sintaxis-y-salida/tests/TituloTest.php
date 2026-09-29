<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/crear-titulo.php';

final class TituloTest extends TestCase
{
    public function testIncluyeElTemaEnElTitulo(): void
    {
        self::assertSame('Tema: PHP', crear_titulo('PHP'));
    }
}
