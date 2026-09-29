<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/filtrar-eventos.php';

final class FiltrarEventosTest extends TestCase
{
    public function testFiltraYTransforma(): void
    {
        $eventos = [['estado' => 'nuevo', 'id' => 1], ['estado' => 'hecho', 'id' => 2], ['estado' => 'nuevo', 'id' => 3]];
        self::assertSame([1, 3], iterator_to_array(filtrar_eventos($eventos, 'nuevo', static fn (array $evento): int => $evento['id'])));
    }

    public function testEsPerezoso(): void
    {
        $leidos = 0;
        $origen = (static function () use (&$leidos): Generator {
            foreach ([['estado' => 'nuevo'], ['estado' => 'nuevo']] as $evento) {
                $leidos++;
                yield $evento;
            }
        })();
        $resultado = filtrar_eventos($origen, 'nuevo', static fn (array $evento): string => $evento['estado']);
        self::assertSame(0, $leidos);
        self::assertSame('nuevo', $resultado->current());
        self::assertSame(1, $leidos);
    }
}
