<?php
declare(strict_types=1);

namespace Curso\Tema12;

final class Etiqueta
{
    public function __construct(private string $texto)
    {
    }

    public function representar(): string
    {
        // TODO: devuelve el texto recortado entre corchetes, por ejemplo [PHP].
        return '';
    }
}
