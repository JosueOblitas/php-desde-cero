<?php
declare(strict_types=1);

$ejemplo = <<<'PHP'
<?php
$nombre = 'Ada';       // string
$edad = 36;            // int
$altura = 1.68;        // float
$estudiaPhp = true;    // bool

$perfil = [
    'nombre' => $nombre,
    'edad' => $edad,
    'estudia_php' => $estudiaPhp,
];
PHP;
$nombre = htmlspecialchars('Ada', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$perfil = [
    'nombre' => $nombre,
    'edad' => 36,
    'altura' => 1.68,
    'estudia_php' => true,
];
$estructura = <<<'TREE'
02-variables-y-tipos/
├── teoria.php
├── tarea/
│   ├── ejercicio.php
│   ├── crear-descripcion.php
│   ├── minutos-a-segundos.php
│   └── resumir-compra.php
└── tests/
    ├── FichaTest.php
    ├── DescripcionTest.php
    ├── MinutosTest.php
    └── ResumenCompraTest.php
TREE;
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>02 · Variables y tipos | PHP desde cero</title><link rel="stylesheet" href="/assets/curso.css"></head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero"><p class="eyebrow">TEMA 02 · DATOS</p><h1>Variables y tipos</h1><p class="lead">Guarda información con variables y reconoce qué clase de valor contiene cada una.</p></div></header>
    <div class="content-grid">
        <section class="panel">
            <h2>Una variable guarda un valor</h2>
            <p>En PHP, el nombre de una variable empieza con <code>$</code>. El signo <code>=</code> asigna un valor. PHP distingue varios tipos según el dato que guardas.</p>
            <ul><li><code>string</code>: texto, como <code>'Ada'</code>.</li><li><code>int</code>: número entero, como <code>36</code>.</li><li><code>float</code>: número decimal, como <code>1.68</code>.</li><li><code>bool</code>: verdadero o falso, escrito <code>true</code> o <code>false</code>.</li><li>Un <code>array</code> agrupa varios valores bajo una sola variable.</li></ul>
            <h3>Ejemplo de código</h3><pre class="code-block"><code><?= htmlspecialchars($ejemplo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></code></pre>
        </section>
        <aside class="panel">
            <h2>Valores que PHP prepara</h2>
            <p>La página ejecuta PHP y muestra una ficha con los valores y el tipo detectado para cada uno.</p>
            <div class="output-box"><strong>Ficha generada</strong><ul><?php foreach ($perfil as $campo => $valor): ?><li><code><?= htmlspecialchars($campo, ENT_QUOTES, 'UTF-8') ?></code>: <?= htmlspecialchars(is_bool($valor) ? ($valor ? 'true' : 'false') : (string) $valor, ENT_QUOTES, 'UTF-8') ?> <span class="small-note">(<?= htmlspecialchars(get_debug_type($valor), ENT_QUOTES, 'UTF-8') ?>)</span></li><?php endforeach; ?></ul></div>
            <h3>Estructura del tema</h3><pre class="tree"><?= htmlspecialchars($estructura, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>
        </aside>
    </div>
    <section class="task-card"><span class="pill">3 EJERCICIOS + PHPUNIT</span><h2>Valores y tipos</h2><ol><li><span class="level basico">Básico</span><code>tarea/crear-descripcion.php</code>: combina un string y un int en una frase.</li><li><span class="level intermedio">Intermedio</span><code>tarea/minutos-a-segundos.php</code>: convierte un entero y conserva el tipo de retorno.</li><li><span class="level avanzado">Avanzado</span><code>tarea/ejercicio.php</code>: reúne string, int, float y bool en una ficha asociativa.</li></ol><p>Las pruebas usan assertSame para comprobar el valor y también su tipo.</p><code class="command">composer test:tema2</code></section>
    <?php $numeroTema = 2; require __DIR__ . '/../../includes/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema 02 de 18 · Sigue con operadores y condicionales</footer>
</main></body></html>
