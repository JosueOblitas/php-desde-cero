<?php
declare(strict_types=1);

// Verifica esta tarea desde la raíz del proyecto:
// ./vendor/bin/phpunit temas/16-seguridad-web/tests/TokenCsrfTest.php

final class TokenCsrf
{
    private array $session;

    public function __construct(array &$session)
    {
        $this->session =& $session;
    }

    public function generar(): string
    {
        // TODO: crea 32 bytes aleatorios, codifica en hexadecimal y guarda en session['csrf'].
        return '';
    }

    public function validar(string $token): bool
    {
        // TODO: compara el token recibido con el guardado usando hash_equals().
        return false;
    }
}
