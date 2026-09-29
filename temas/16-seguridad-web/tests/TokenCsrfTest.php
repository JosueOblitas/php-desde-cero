<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/TokenCsrf.php';

final class TokenCsrfTest extends TestCase
{
    public function testGeneraYGuardaUnTokenAleatorio(): void
    {
        $session = [];
        $proteccion = new TokenCsrf($session);
        $token = $proteccion->generar();

        self::assertMatchesRegularExpression('/^[a-f0-9]{64}$/', $token);
        self::assertSame($token, $session['csrf']);
        self::assertTrue($proteccion->validar($token));
        self::assertFalse($proteccion->validar(str_repeat('0', 64)));
    }

    public function testRechazaCuandoNoHayTokenEnSesion(): void
    {
        $session = [];
        self::assertFalse((new TokenCsrf($session))->validar('cualquiera'));
    }
}
