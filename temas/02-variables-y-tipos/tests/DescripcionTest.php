<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/crear-descripcion.php';

final class DescripcionTest extends TestCase
{
    public function testConstruyeLaDescripcionConLosArgumentos(): void
    {
        self::assertSame('Ana tiene 20 años.', crear_descripcion('Ana', 20));
    }
}
