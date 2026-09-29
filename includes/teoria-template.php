<?php
declare(strict_types=1);

/** @var array<string, mixed> $lesson */
$esc = static fn (string $valor): string => htmlspecialchars($valor, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$numero = str_pad((string) $lesson['numero'], 2, '0', STR_PAD_LEFT);
$ejercicios = $lesson['ejercicios'];
$ampliaciones = require __DIR__ . '/ampliaciones.php';
$reto = $ampliaciones[(int) $lesson['numero']];
$archivosTarea = array_merge(array_column($ejercicios, 'archivo'), $lesson['auxiliares'] ?? [], [$reto['archivo']]);
$estructura = $lesson['carpeta'] . "/\n├── teoria.php\n├── tarea/\n";
foreach ($archivosTarea as $indice => $archivo) {
    $estructura .= '│   ' . ($indice === count($archivosTarea) - 1 ? '└── ' : '├── ') . $archivo . "\n";
}
$estructura .= "└── tests/\n";
$archivosTest = array_merge(array_column($ejercicios, 'test'), [$reto['test']]);
foreach ($archivosTest as $indice => $archivo) {
    $estructura .= '    ' . ($indice === count($archivosTest) - 1 ? '└── ' : '├── ') . $archivo . "\n";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $esc($numero . ' · ' . $lesson['titulo']) ?> | PHP desde cero</title>
    <link rel="stylesheet" href="/assets/curso.css">
</head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero">
        <p class="eyebrow">TEMA <?= $esc($numero) ?> · <?= $esc(mb_strtoupper($lesson['categoria'], 'UTF-8')) ?></p>
        <h1><?= $esc($lesson['titulo']) ?></h1>
        <p class="lead"><?= $esc($lesson['descripcion']) ?></p>
    </div></header>
    <div class="content-grid">
        <section class="panel">
            <h2><?= $esc($lesson['subtitulo']) ?></h2>
            <ul>
                <?php foreach ($lesson['conceptos'] as $concepto): ?>
                    <li><?= $esc($concepto) ?></li>
                <?php endforeach; ?>
            </ul>
            <h3>Ejemplo ejecutable</h3>
            <pre class="code-block"><code><?= $esc($lesson['codigo']) ?></code></pre>
        </section>
        <aside class="panel">
            <h2>Resultado generado por PHP</h2>
            <p><?= $esc($lesson['explicacion_resultado']) ?></p>
            <div class="output-box"><strong>Salida</strong><p><?= $esc((string) $lesson['resultado']) ?></p></div>
            <h3>Estructura del tema</h3>
            <pre class="tree"><?= $esc($estructura) ?></pre>
        </aside>
    </div>
    <section class="task-card">
        <span class="pill">3 EJERCICIOS + PHPUNIT</span>
        <h2>De básico a avanzado</h2>
        <ol>
            <?php foreach ($ejercicios as $ejercicio): ?>
                <li><span class="level <?= $esc($ejercicio['nivel']) ?>"><?= $esc($ejercicio['nivel']) ?></span><code>tarea/<?= $esc($ejercicio['archivo']) ?></code>: <?= $esc($ejercicio['descripcion']) ?></li>
            <?php endforeach; ?>
        </ol>
        <p><?= $esc($lesson['nota']) ?></p>
        <code class="command">composer test:tema<?= $esc((string) $lesson['numero']) ?></code>
    </section>
    <?php $numeroTema = (int) $lesson['numero']; require __DIR__ . '/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema <?= $esc($numero) ?> de 18 · <?= $esc($lesson['siguiente']) ?></footer>
</main></body></html>
