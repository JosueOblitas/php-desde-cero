<?php
declare(strict_types=1);

/** @var int $numeroTema */
$ampliaciones = require __DIR__ . '/ampliaciones.php';
$ampliacion = $ampliaciones[$numeroTema];
$escAmpliacion = static fn (string $texto): string => htmlspecialchars($texto, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<section class="panel ampliacion">
    <p class="eyebrow">PROFUNDIZA EN EL TEMA</p>
    <h2>Entiende el porqué</h2>
    <?php foreach ($ampliacion['ideas'] as $idea): ?>
        <p><?= $escAmpliacion($idea) ?></p>
    <?php endforeach; ?>
    <h3>Otro ejemplo para probar</h3>
    <pre class="code-block"><code><?= $escAmpliacion(str_replace('\n', "\n", $ampliacion['codigo'])) ?></code></pre>
    <p><strong>Qué ocurre:</strong> <?= $escAmpliacion($ampliacion['resultado']) ?></p>
    <h3>Comprueba que lo entendiste</h3>
    <ol>
        <?php foreach ($ampliacion['preguntas'] as $pregunta): ?>
            <li><?= $escAmpliacion($pregunta) ?></li>
        <?php endforeach; ?>
    </ol>
</section>
<section class="task-card">
    <span class="pill">RETO 4 · PHPUNIT</span>
    <h2>Integra lo aprendido</h2>
    <p><code>tarea/<?= $escAmpliacion($ampliacion['archivo']) ?></code>: <?= $escAmpliacion($ampliacion['reto']) ?></p>
    <p>Completa el archivo y ejecuta <code>composer test:tema<?= $numeroTema ?></code>. La prueba está en <code>tests/<?= $escAmpliacion($ampliacion['test']) ?></code>.</p>
</section>
