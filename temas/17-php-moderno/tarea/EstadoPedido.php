<?php
declare(strict_types=1);

enum EstadoPedido: string
{
    case Nuevo = 'nuevo';
    case Pagado = 'pagado';
    case Cancelado = 'cancelado';

    public function etiqueta(): string
    {
        // TODO: devuelve Nuevo, Pagado o Cancelado según el caso.
        return '';
    }
}
