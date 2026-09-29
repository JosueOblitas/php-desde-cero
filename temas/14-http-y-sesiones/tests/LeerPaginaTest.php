<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/leer-pagina.php';

final class LeerPaginaTest extends TestCase
{
    public function testAceptaUnaPaginaPositiva(): void
    {
        self::assertSame(3, leer_pagina(['page' => '3']));
    }

    public function testUsaUnoParaEntradasInvalidas(): void
    {
        self::assertSame(1, leer_pagina([]));
        self::assertSame(1, leer_pagina(['page' => '0']));
        self::assertSame(1, leer_pagina(['page' => '3abc']));
    }
}
