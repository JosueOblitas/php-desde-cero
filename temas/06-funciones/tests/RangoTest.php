<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../tarea/esta-en-rango.php';

final class RangoTest extends TestCase
{
    public function testIncluyeLosExtremosDelRango(): void
    {
        self::assertTrue(esta_en_rango(1, 1, 5));
        self::assertTrue(esta_en_rango(5, 1, 5));
        self::assertFalse(esta_en_rango(0, 1, 5));
        self::assertFalse(esta_en_rango(6, 1, 5));
    }

    public function testNormalizaExtremosInvertidosYPuedeExcluirlos(): void
    {
        self::assertTrue(esta_en_rango(3, 5, 1));
        self::assertFalse(esta_en_rango(1, 5, 1, false));
        self::assertTrue(esta_en_rango(3, 5, 1, false));
    }
}
