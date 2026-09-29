<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/filtrar-pares.php';

final class FiltrarParesTest extends TestCase
{
    public function testConservaSoloLosParesEnElOrdenOriginal(): void
    {
        self::assertSame([8, 2, 0], filtrar_pares([8, 3, 2, 5, 0]));
    }

    public function testNoRepiteParesYAdmiteCeroYNegativos(): void
    {
        self::assertSame([2, -4, 0], filtrar_pares([2, 2, -4, -4, 0, 0, 3]));
    }
}
