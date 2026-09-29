<?php
declare(strict_types=1);

use Curso\Tema12\Canal;
use Curso\Tema12\Mensajero;
use PHPUnit\Framework\TestCase;

final class MensajeroTest extends TestCase
{
    public function testInyectaUnCanalYPublicaTextoLimpio(): void
    {
        $canal = new class implements Canal {
            public array $mensajes = [];

            public function publicar(string $texto): bool
            {
                $this->mensajes[] = $texto;
                return true;
            }
        };

        self::assertTrue((new Mensajero($canal))->enviar('  Hola  '));
        self::assertSame(['Hola'], $canal->mensajes);
    }

    public function testNoPublicaUnMensajeVacio(): void
    {
        $canal = new class implements Canal {
            public int $llamadas = 0;

            public function publicar(string $texto): bool
            {
                $this->llamadas++;
                return true;
            }
        };

        self::assertFalse((new Mensajero($canal))->enviar('   '));
        self::assertSame(0, $canal->llamadas);
    }
}
