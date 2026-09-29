<?php
declare(strict_types=1);

namespace Curso\Tema12;

final class Mensajero
{
    public function __construct(private Canal $canal)
    {
    }

    public function enviar(string $mensaje): bool
    {
        // TODO: usa trim; si queda vacío devuelve false. Si no, publica y devuelve el resultado.
        return false;
    }
}
