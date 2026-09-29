<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/contar-hasta.php';

final class ContarHastaTest extends TestCase
{
    public function testCuentaDesdeUnoHastaElLimite(): void
    {
        self::assertSame([1, 2, 3, 4], contar_hasta(4));
    }

    public function testDevuelveListaVaciaSiElLimiteEsMenorQueUno(): void
    {
        self::assertSame([], contar_hasta(0));
    }
}
