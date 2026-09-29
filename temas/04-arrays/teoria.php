<?php
declare(strict_types=1);

$ejemplo = <<<'PHP'
<?php
$colores = ['verde', 'azul'];
$persona = [
    'nombre' => 'Ada',
    'edad' => 36,
];

echo $colores[0];          // verde
echo $persona['nombre'];   // Ada
PHP;
$colores = ['verde', 'azul'];
$persona = ['nombre' => 'Ada', 'edad' => 36];
$estructura = <<<'TREE'
04-arrays/
├── teoria.php
├── tarea/
│   ├── lista-compra.php
│   ├── actualizar-stock.php
│   ├── calcular-promedio.php
│   └── agrupar-cantidades.php
└── tests/
    ├── ListaCompraTest.php
    ├── StockTest.php
    ├── PromedioTest.php
    └── AgruparCantidadesTest.php
TREE;
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>04 · Arrays | PHP desde cero</title><link rel="stylesheet" href="/assets/curso.css"></head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero"><p class="eyebrow">TEMA 04 · COLECCIONES</p><h1>Arrays</h1><p class="lead">Guarda varios valores bajo una variable y accede a cada uno mediante una posición o una clave.</p></div></header>
    <div class="content-grid">
        <section class="panel">
            <h2>Dos formas habituales</h2>
            <ul><li>Un array indexado usa posiciones numéricas que empiezan en <code>0</code>.</li><li>Un array asociativo usa claves con nombre, como <code>'nombre'</code>.</li><li>Los corchetes <code>[]</code> crean arrays y permiten leer o cambiar valores.</li><li><code>count()</code> cuenta elementos y <code>array_sum()</code> suma valores numéricos.</li></ul>
            <h3>Ejemplo de código</h3><pre class="code-block"><code><?= htmlspecialchars($ejemplo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></code></pre>
        </section>
        <aside class="panel">
            <h2>El array visto en pantalla</h2>
            <div class="output-box"><strong>Lista indexada</strong><p>[0] <?= htmlspecialchars($colores[0], ENT_QUOTES, 'UTF-8') ?> · [1] <?= htmlspecialchars($colores[1], ENT_QUOTES, 'UTF-8') ?></p></div>
            <div class="output-box" style="margin-top: 12px"><strong>Array asociativo</strong><p>Nombre: <?= htmlspecialchars($persona['nombre'], ENT_QUOTES, 'UTF-8') ?> · Edad: <?= $persona['edad'] ?></p></div>
            <h3>Estructura del tema</h3><pre class="tree"><?= htmlspecialchars($estructura, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>
        </aside>
    </div>
    <section class="task-card"><span class="pill">3 EJERCICIOS + PHPUNIT</span><h2>Listas, claves y cálculos</h2><ol><li><span class="level basico">Básico</span><code>tarea/lista-compra.php</code>: construye una lista indexada en el orden recibido.</li><li><span class="level intermedio">Intermedio</span><code>tarea/actualizar-stock.php</code>: modifica una clave y conserva el resto del array asociativo.</li><li><span class="level avanzado">Avanzado</span><code>tarea/calcular-promedio.php</code>: agrega valores numéricos y resuelve el caso de un array vacío.</li></ol><p>El último ejercicio combina count(), array_sum() y una condición para evitar dividir entre cero.</p><code class="command">composer test:tema4</code></section>
    <?php $numeroTema = 4; require __DIR__ . '/../../includes/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema 04 de 18 · Sigue con bucles para recorrer colecciones</footer>
</main></body></html>
