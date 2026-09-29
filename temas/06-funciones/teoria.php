<?php
declare(strict_types=1);

$ejemplo = <<<'PHP'
<?php
function calcular_area(float $ancho, float $alto = 1.0): float
{
    return $ancho * $alto;
}

$area = calcular_area(4.0, 3.0); // 12.0
PHP;
function calcular_area_demo(float $ancho, float $alto = 1.0): float
{
    return $ancho * $alto;
}
$area = calcular_area_demo(4.0, 3.0);
$estructura = <<<'TREE'
06-funciones/
├── teoria.php
├── tarea/
│   ├── calcular-precio.php
│   ├── formatear-nombre.php
│   ├── esta-en-rango.php
│   └── aplicar-operacion.php
└── tests/
    ├── PrecioTest.php
    ├── FormatearNombreTest.php
    ├── RangoTest.php
    └── OperacionTest.php
TREE;
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>06 · Funciones | PHP desde cero</title><link rel="stylesheet" href="/assets/curso.css"></head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero"><p class="eyebrow">TEMA 06 · REUTILIZACIÓN</p><h1>Funciones</h1><p class="lead">Pon nombre a una tarea, recibe datos con parámetros y devuelve un resultado que se pueda usar.</p></div></header>
    <div class="content-grid">
        <section class="panel">
            <h2>Partes de una función</h2>
            <ul><li><code>function</code> inicia la definición y el nombre identifica la tarea.</li><li>Los parámetros reciben datos; los argumentos son los valores enviados al llamar la función.</li><li>El tipo después de <code>:</code> indica el tipo de valor que devuelve.</li><li>Un parámetro puede tener un valor predeterminado, como <code>$alto = 1.0</code>.</li><li><code>return</code> entrega el resultado a quien hizo la llamada.</li></ul>
            <h3>Ejemplo de función con parámetro opcional</h3><pre class="code-block"><code><?= htmlspecialchars($ejemplo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></code></pre>
        </section>
        <aside class="panel">
            <h2>El valor devuelto</h2>
            <p>La página llamó a la función con un ancho de <code>4.0</code> y alto de <code>3.0</code>.</p>
            <div class="output-box"><strong>Área calculada</strong><p><?= number_format($area, 1) ?> unidades cuadradas</p></div>
            <h3>Estructura del tema</h3><pre class="tree"><?= htmlspecialchars($estructura, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>
        </aside>
    </div>
    <section class="task-card"><span class="pill">3 EJERCICIOS + PHPUNIT</span><h2>Parámetros y contratos</h2><ol><li><span class="level basico">Básico</span><code>tarea/formatear-nombre.php</code>: combina parámetros y usa un separador predeterminado.</li><li><span class="level intermedio">Intermedio</span><code>tarea/calcular-precio.php</code>: aplica un porcentaje indicado o el predeterminado.</li><li><span class="level avanzado">Avanzado</span><code>tarea/esta-en-rango.php</code>: acepta extremos en cualquier orden y permite incluirlos o excluirlos.</li></ol><p>Observa cómo los parámetros opcionales cambian el comportamiento sin cambiar el tipo de retorno.</p><code class="command">composer test:tema6</code></section>
    <?php $numeroTema = 6; require __DIR__ . '/../../includes/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema 06 de 18 · Sigue con clases y objetos</footer>
</main></body></html>
