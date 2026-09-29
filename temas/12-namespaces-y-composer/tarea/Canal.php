<?php
declare(strict_types=1);

namespace Curso\Tema12;

interface Canal
{
    public function publicar(string $texto): bool;
}
