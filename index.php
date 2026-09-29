<?php
declare(strict_types=1);

$temas = [
    [
        'numero' => '01',
        'titulo' => 'Sintaxis y salida',
        'descripcion' => 'Las etiquetas PHP, las instrucciones y la salida que recibe el navegador.',
        'ruta' => '/temas/01-sintaxis-y-salida/teoria.php',
        'etiqueta' => 'Punto de partida',
    ],
    [
        'numero' => '02',
        'titulo' => 'Variables y tipos',
        'descripcion' => 'Guarda datos, reconoce sus tipos y muestra valores en una página.',
        'ruta' => '/temas/02-variables-y-tipos/teoria.php',
        'etiqueta' => 'Datos',
    ],
    [
        'numero' => '03',
        'titulo' => 'Operadores y condicionales',
        'descripcion' => 'Compara valores y elige qué resultado producir con if y else.',
        'ruta' => '/temas/03-operadores-y-condicionales/teoria.php',
        'etiqueta' => 'Decisiones',
    ],
    [
        'numero' => '04',
        'titulo' => 'Arrays',
        'descripcion' => 'Agrupa listas y datos con claves para trabajar con colecciones.',
        'ruta' => '/temas/04-arrays/teoria.php',
        'etiqueta' => 'Colecciones',
    ],
    [
        'numero' => '05',
        'titulo' => 'Bucles',
        'descripcion' => 'Repite instrucciones con for, while y foreach.',
        'ruta' => '/temas/05-bucles/teoria.php',
        'etiqueta' => 'Repetición',
    ],
    [
        'numero' => '06',
        'titulo' => 'Funciones',
        'descripcion' => 'Organiza lógica reutilizable con parámetros y valores de retorno.',
        'ruta' => '/temas/06-funciones/teoria.php',
        'etiqueta' => 'Reutilización',
    ],
    [
        'numero' => '07',
        'titulo' => 'Clases y objetos',
        'descripcion' => 'Modela datos y comportamiento con propiedades, métodos y constructores.',
        'ruta' => '/temas/07-clases-y-objetos/teoria.php',
        'etiqueta' => 'Programación orientada a objetos',
    ],
    [
        'numero' => '08',
        'titulo' => 'Cadenas y expresiones regulares',
        'descripcion' => 'Procesa texto, codificación UTF-8 y patrones de búsqueda.',
        'ruta' => '/temas/08-cadenas-y-regex/teoria.php',
        'etiqueta' => 'Texto',
    ],
    [
        'numero' => '09',
        'titulo' => 'Fechas y tiempo',
        'descripcion' => 'Trabaja con fechas inmutables, zonas horarias e intervalos.',
        'ruta' => '/temas/09-fechas-y-tiempo/teoria.php',
        'etiqueta' => 'Tiempo',
    ],
    [
        'numero' => '10',
        'titulo' => 'POO avanzada',
        'descripcion' => 'Aplica interfaces, herencia y composición.',
        'ruta' => '/temas/10-poo-avanzada/teoria.php',
        'etiqueta' => 'Diseño',
    ],
    [
        'numero' => '11',
        'titulo' => 'Errores y excepciones',
        'descripcion' => 'Señala fallos, captura excepciones y procesa lotes sin perder datos.',
        'ruta' => '/temas/11-errores-y-excepciones/teoria.php',
        'etiqueta' => 'Errores',
    ],
    [
        'numero' => '12',
        'titulo' => 'Namespaces y Composer',
        'descripcion' => 'Organiza clases y cárgalas con PSR-4.',
        'ruta' => '/temas/12-namespaces-y-composer/teoria.php',
        'etiqueta' => 'Dependencias',
    ],
    [
        'numero' => '13',
        'titulo' => 'Archivos y JSON',
        'descripcion' => 'Lee, guarda y procesa datos en archivos.',
        'ruta' => '/temas/13-archivos-y-json/teoria.php',
        'etiqueta' => 'Persistencia',
    ],
    [
        'numero' => '14',
        'titulo' => 'HTTP, formularios y sesiones',
        'descripcion' => 'Recibe entradas web y conserva estado entre peticiones.',
        'ruta' => '/temas/14-http-y-sesiones/teoria.php',
        'etiqueta' => 'Web',
    ],
    [
        'numero' => '15',
        'titulo' => 'PDO y bases de datos',
        'descripcion' => 'Consulta y guarda datos con sentencias preparadas.',
        'ruta' => '/temas/15-pdo-y-bases-de-datos/teoria.php',
        'etiqueta' => 'Datos',
    ],
    [
        'numero' => '16',
        'titulo' => 'Seguridad web',
        'descripcion' => 'Escapa HTML, protege contraseñas y valida tokens CSRF.',
        'ruta' => '/temas/16-seguridad-web/teoria.php',
        'etiqueta' => 'Seguridad',
    ],
    [
        'numero' => '17',
        'titulo' => 'PHP moderno',
        'descripcion' => 'Usa match, enums y generadores para escribir código claro.',
        'ruta' => '/temas/17-php-moderno/teoria.php',
        'etiqueta' => 'Lenguaje',
    ],
    [
        'numero' => '18',
        'titulo' => 'CLI y configuración',
        'descripcion' => 'Procesa argumentos y opciones al ejecutar PHP desde terminal.',
        'ruta' => '/temas/18-cli-y-configuracion/teoria.php',
        'etiqueta' => 'Herramientas',
    ],
];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP desde cero · Curso</title>
    <link rel="stylesheet" href="/assets/curso.css">
</head>
<body>
<main class="shell">
    <header class="hero">
        <p class="eyebrow">RUTA DE APRENDIZAJE · PHP 8.2</p>
        <h1>PHP desde cero</h1>
        <p class="lead">Aprende un concepto, mira qué genera PHP y comprueba lo aprendido con una tarea y PHPUnit.</p>
        <div class="hero-meta"><span>18 temas · 72 ejercicios</span><span>De básico a avanzado y reto integrador</span></div>
    </header>

    <section class="section-heading">
        <div><p class="eyebrow">DEL PRIMER SCRIPT A UNA APLICACIÓN PHP</p><h2>Elige un tema</h2></div>
        <span class="pill">Orden recomendado</span>
    </section>

    <section class="lesson-grid" aria-label="Temas del curso">
        <?php foreach ($temas as $tema): ?>
            <article class="lesson-card">
                <div class="card-top"><span class="lesson-number"><?= htmlspecialchars($tema['numero'], ENT_QUOTES, 'UTF-8') ?></span><span class="pill"><?= htmlspecialchars($tema['etiqueta'], ENT_QUOTES, 'UTF-8') ?></span></div>
                <h2><?= htmlspecialchars($tema['titulo'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($tema['descripcion'], ENT_QUOTES, 'UTF-8') ?></p>
                <a class="button-link" href="<?= htmlspecialchars($tema['ruta'], ENT_QUOTES, 'UTF-8') ?>">Abrir lección <span aria-hidden="true">→</span></a>
            </article>
        <?php endforeach; ?>
    </section>

    <aside class="callout"><strong>Cómo usarlo</strong><span>Lee la lección en el navegador, completa su archivo en <code>tarea/</code> y ejecuta el comando de PHPUnit que aparece al final.</span></aside>
    <footer class="site-footer">Material de práctica · Hecho para ejecutar en tu equipo</footer>
</main>
</body>
</html>
