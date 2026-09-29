<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/Rectangulo.php';

final class RectanguloTest extends TestCase
{
    public function testCumpleElContratoYCalculaElArea(): void
    {
        $figura = new Rectangulo(3.0, 4.0);

        self::assertInstanceOf(AreaCalculable::class, $figura);
        self::assertSame(12.0, $figura->area());
    }
}
