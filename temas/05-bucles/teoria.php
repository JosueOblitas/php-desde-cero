<?php
declare(strict_types=1);

$ejemplo = <<<'PHP'
<?php
$numeros = [2, 4, 6];
$suma = 0;

foreach ($numeros as $numero) {
    $suma += $numero;
}

echo $suma; // 12
PHP;
$numeros = [2, 4, 6];
$suma = 0;
foreach ($numeros as $numero) {
    $suma += $numero;
}
$estructura = <<<'TREE'
05-bucles/
├── teoria.php
├── tarea/
│   ├── contar-hasta.php
│   ├── sumar-pares-hasta.php
│   ├── filtrar-pares.php
│   └── tabla-frecuencias.php
└── tests/
    ├── ContarHastaTest.php
    ├── SumarParesTest.php
    ├── FiltrarParesTest.php
    └── FrecuenciasTest.php
TREE;
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>05 · Bucles | PHP desde cero</title><link rel="stylesheet" href="/assets/curso.css"></head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero"><p class="eyebrow">TEMA 05 · REPETICIÓN</p><h1>Bucles</h1><p class="lead">Ejecuta un bloque varias veces, ya sea para contar o para recorrer los elementos de un array.</p></div></header>
    <div class="content-grid">
        <section class="panel">
            <h2>Elige el bucle según la tarea</h2>
            <ul><li><code>for</code> suele servir cuando sabes cuántas repeticiones necesitas.</li><li><code>while</code> repite mientras una condición sea verdadera.</li><li><code>foreach</code> visita los elementos de un array sin manejar índices manualmente.</li><li>Dentro del bloque puedes actualizar un acumulador, como <code>$suma</code>.</li></ul>
            <h3>Ejemplo: sumar con foreach</h3><pre class="code-block"><code><?= htmlspecialchars($ejemplo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></code></pre>
        </section>
        <aside class="panel">
            <h2>La salida del ejemplo</h2>
            <p>El bucle toma cada número de la lista y lo añade al acumulador.</p>
            <div class="output-box"><strong>Secuencia</strong><p><?= htmlspecialchars(implode(' + ', $numeros), ENT_QUOTES, 'UTF-8') ?> = <?= $suma ?></p></div>
            <h3>Estructura del tema</h3><pre class="tree"><?= htmlspecialchars($estructura, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>
        </aside>
    </div>
    <section class="task-card"><span class="pill">3 EJERCICIOS + PHPUNIT</span><h2>Repetición y filtrado</h2><ol><li><span class="level basico">Básico</span><code>tarea/contar-hasta.php</code>: genera una secuencia de uno hasta un límite.</li><li><span class="level intermedio">Intermedio</span><code>tarea/sumar-pares-hasta.php</code>: acumula solo los números pares dentro del ciclo.</li><li><span class="level avanzado">Avanzado</span><code>tarea/filtrar-pares.php</code>: conserva pares únicos en el orden original, incluidos cero y negativos.</li></ol><p>El reto avanzado necesita recorrido, condición y un resultado acumulado sin duplicados.</p><code class="command">composer test:tema5</code></section>
    <?php $numeroTema = 5; require __DIR__ . '/../../includes/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema 05 de 18 · Sigue con funciones</footer>
</main></body></html>
