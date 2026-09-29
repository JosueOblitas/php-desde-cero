<?php
declare(strict_types=1);

$ejemplo = <<<'PHP'
<?php
$nota = 15;

if ($nota < 0 || $nota > 20) {
    $resultado = 'Nota inválida';
} elseif ($nota >= 11) {
    $resultado = 'Aprobado';
} else {
    $resultado = 'Desaprobado';
}
PHP;
$notaDemostracion = 15;
if ($notaDemostracion < 0 || $notaDemostracion > 20) {
    $resultado = 'Nota inválida';
} elseif ($notaDemostracion >= 11) {
    $resultado = 'Aprobado';
} else {
    $resultado = 'Desaprobado';
}
$estructura = <<<'TREE'
03-operadores-y-condicionales/
├── teoria.php
├── tarea/
│   ├── ejercicio.php
│   ├── mayoria-de-edad.php
│   ├── mayor-de-dos.php
│   └── calcular-envio.php
└── tests/
    ├── NotaTest.php
    ├── MayorEdadTest.php
    ├── MayorDeDosTest.php
    └── EnvioTest.php
TREE;
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>03 · Operadores y condicionales | PHP desde cero</title><link rel="stylesheet" href="/assets/curso.css"></head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero"><p class="eyebrow">TEMA 03 · DECISIONES</p><h1>Operadores y condicionales</h1><p class="lead">Compara valores y elige qué instrucciones ejecutar con if, elseif y else.</p></div></header>
    <div class="content-grid">
        <section class="panel">
            <h2>El programa puede elegir</h2>
            <p>Los operadores comparan valores: <code>&gt;</code>, <code>&lt;</code>, <code>&gt;=</code> y <code>===</code>. Una comparación produce <code>true</code> o <code>false</code>.</p>
            <ul><li><code>if</code> ejecuta un bloque si la condición se cumple.</li><li><code>elseif</code> comprueba otra condición si la primera fue falsa.</li><li><code>else</code> cubre los demás casos.</li><li><code>&amp;&amp;</code> significa “y”; <code>||</code> significa “o”.</li></ul>
            <h3>Ejemplo: resultado de una nota entre 0 y 20</h3><pre class="code-block"><code><?= htmlspecialchars($ejemplo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></code></pre>
        </section>
        <aside class="panel">
            <h2>La decisión ejecutada</h2><p>Esta página evaluó una nota de <?= $notaDemostracion ?> sobre 20:</p>
            <div class="output-box"><strong>Resultado</strong><p><?= htmlspecialchars($resultado, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p></div>
            <h3>Prueba también</h3><p>Con <code>10</code> saldrá “Desaprobado”. Con <code>22</code> saldrá “Nota inválida”. Los límites ayudan a encontrar errores.</p>
            <h3>Estructura del tema</h3><pre class="tree"><?= htmlspecialchars($estructura, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>
        </aside>
    </div>
    <section class="task-card"><span class="pill">3 EJERCICIOS + PHPUNIT</span><h2>Decisiones y límites</h2><ol><li><span class="level basico">Básico</span><code>tarea/mayoria-de-edad.php</code>: evalúa el límite de los 18 años.</li><li><span class="level intermedio">Intermedio</span><code>tarea/mayor-de-dos.php</code>: compara dos enteros, incluidos los iguales.</li><li><span class="level avanzado">Avanzado</span><code>tarea/ejercicio.php</code>: clasifica notas con varias ramas y rechaza valores fuera de 0 a 20.</li></ol><p>Prueba los valores justo antes, en y después de cada límite.</p><code class="command">composer test:tema3</code></section>
    <?php $numeroTema = 3; require __DIR__ . '/../../includes/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema 03 de 18 · Sigue con arrays y colecciones</footer>
</main></body></html>
