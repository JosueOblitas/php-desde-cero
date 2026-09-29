<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/17-php-moderno/tests/EstadoPedidoTest.php

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
