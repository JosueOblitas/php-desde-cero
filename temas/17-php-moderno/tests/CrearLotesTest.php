<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/crear-lotes.php';

final class CrearLotesTest extends TestCase
{
    public function testProduceLotesConUltimoLoteParcial(): void
    {
        self::assertSame([[1, 2], [3, 4], [5]], iterator_to_array(crear_lotes([1, 2, 3, 4, 5], 2), false));
    }

    public function testNoConsumeLaEntradaHastaIterar(): void
    {
        $consumidos = 0;
        $entrada = (static function () use (&$consumidos): Generator {
            foreach ([1, 2, 3] as $numero) {
                $consumidos++;
                yield $numero;
            }
        })();

        $lotes = crear_lotes($entrada, 2);
        self::assertSame(0, $consumidos);
        $lotes->rewind();
        self::assertSame([1, 2], $lotes->current());
        self::assertSame(2, $consumidos);
    }

    public function testAplicaUnaClosureOpcional(): void
    {
        self::assertSame(
            [[2, 4], [6]],
            iterator_to_array(crear_lotes([1, 2, 3], 2, static fn (int $n): int => $n * 2), false)
        );
    }

    public function testRechazaTamanoNoPositivo(): void
    {
        $this->expectException(InvalidArgumentException::class);
        iterator_to_array(crear_lotes([1], 0));
    }
}
