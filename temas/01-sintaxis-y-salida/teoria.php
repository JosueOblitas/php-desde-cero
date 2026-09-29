<?php
declare(strict_types=1);

$ejemplo = <<<'PHP'
<?php
$nombre = 'Ada';
echo '<h1>Hola, ' . $nombre . '</h1>';
PHP;
$nombreMostrado = htmlspecialchars('Ada', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$estructura = <<<'TREE'
php-desde-cero/
└── temas/
    └── 01-sintaxis-y-salida/
        ├── teoria.php
        ├── tarea/
        │   ├── ejercicio.php
        │   ├── crear-titulo.php
        │   ├── crear-presentacion.php
        │   └── crear-enlace.php
        └── tests/
            ├── SaludoTest.php
            ├── TituloTest.php
            ├── PresentacionTest.php
            └── EnlaceTest.php
TREE;
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>01 · Sintaxis y salida | PHP desde cero</title><link rel="stylesheet" href="/assets/curso.css">
</head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero"><p class="eyebrow">TEMA 01 · BASES</p><h1>Sintaxis y salida</h1><p class="lead">PHP ejecuta instrucciones en el servidor y puede enviar HTML al navegador.</p></div></header>
    <div class="content-grid">
        <section class="panel">
            <h2>¿Qué está pasando?</h2>
            <p>Un archivo PHP suele terminar en <code>.php</code>. El código empieza con <code>&lt;?php</code>. El servidor ejecuta esas instrucciones y envía el resultado al navegador.</p>
            <ul><li>Una instrucción termina normalmente con punto y coma (<code>;</code>).</li><li><code>echo</code> escribe contenido en la respuesta.</li><li>El navegador recibe HTML; no necesita conocer el código PHP que lo produjo.</li></ul>
            <h3>Ejemplo de código</h3>
            <pre class="code-block"><code><?= htmlspecialchars($ejemplo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></code></pre>
            <h3>Resultado generado por PHP</h3>
            <div class="output-box"><strong>Vista en el navegador</strong><p>Hola, <?= $nombreMostrado ?></p></div>
            <p>Cuando el texto viene de un formulario o de otra persona, usa <code>htmlspecialchars()</code> antes de insertarlo en HTML. Lo practicarás en el ejercicio avanzado.</p>
        </section>
        <aside class="panel">
            <h2>El recorrido de un archivo</h2>
            <ol><li>Escribes PHP en el archivo.</li><li>El servidor ejecuta PHP.</li><li>La respuesta HTML aparece aquí, en el navegador.</li></ol>
            <h3>Estructura del tema</h3><pre class="tree"><?= htmlspecialchars($estructura, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>
            <h3>Para verlo</h3><p>Desde la raíz del proyecto, inicia <code>php -S localhost:8000</code> y abre esta lección desde el índice.</p>
        </aside>
    </div>
    <section class="task-card"><span class="pill">3 EJERCICIOS + PHPUNIT</span><h2>Salida de texto y HTML</h2><ol><li><span class="level basico">Básico</span><code>tarea/ejercicio.php</code>: devuelve un saludo formado con el nombre recibido.</li><li><span class="level intermedio">Intermedio</span><code>tarea/crear-titulo.php</code>: construye un título usando concatenación y el argumento.</li><li><span class="level avanzado">Avanzado</span><code>tarea/crear-presentacion.php</code>: presenta dos datos y escapa sus partes variables para que el HTML sea seguro.</li></ol><p>La firma de cada función ya está escrita. En el tema 06 aprenderás a crear funciones desde cero.</p><code class="command">composer test:tema1</code></section>
    <?php $numeroTema = 1; require __DIR__ . '/../../includes/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema 01 de 18 · Sigue con variables y tipos</footer>
</main></body></html>
