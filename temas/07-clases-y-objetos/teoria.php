<?php
declare(strict_types=1);

final class ProductoDemostracion
{
    private string $nombre;
    private float $precio;

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function descripcion(): string
    {
        return $this->nombre . ' · S/ ' . number_format($this->precio, 2);
    }
}

$ejemplo = <<<'PHP'
<?php
class Producto
{
    private string $nombre;
    private float $precio;

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function descripcion(): string
    {
        return $this->nombre . ' · S/ ' . number_format($this->precio, 2);
    }
}

$producto = new Producto('Cuaderno', 12.50);
PHP;
$producto = new ProductoDemostracion('Cuaderno', 12.50);
$estructura = <<<'TREE'
07-clases-y-objetos/
├── teoria.php
├── tarea/
│   ├── Producto.php
│   ├── Contador.php
│   ├── CuentaBancaria.php
│   └── Inventario.php
└── tests/
    ├── ProductoTest.php
    ├── ContadorTest.php
    ├── CuentaBancariaTest.php
    └── InventarioTest.php
TREE;
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>07 · Clases y objetos | PHP desde cero</title><link rel="stylesheet" href="/assets/curso.css"></head>
<body><main class="shell">
    <a class="back-link" href="/">← Volver al índice</a>
    <header class="lesson-hero"><div class="hero"><p class="eyebrow">TEMA 07 · PROGRAMACIÓN ORIENTADA A OBJETOS</p><h1>Clases y objetos</h1><p class="lead">Agrupa datos y acciones en una clase; crea objetos para representar elementos concretos de tu programa.</p></div></header>
    <div class="content-grid">
        <section class="panel">
            <h2>Clase, objeto y sus partes</h2>
            <ul><li>Una <strong>clase</strong> describe qué datos y acciones tendrá un tipo de objeto.</li><li>Un <strong>objeto</strong> es una instancia concreta creada con <code>new</code>.</li><li>Las <strong>propiedades</strong> guardan el estado; los <strong>métodos</strong> son funciones de la clase.</li><li>El <strong>constructor</strong> <code>__construct()</code> prepara el objeto al crearlo.</li><li><code>$this</code> se refiere al objeto actual; <code>private</code> protege los datos internos.</li></ul>
            <h3>Ejemplo de clase</h3><pre class="code-block"><code><?= htmlspecialchars($ejemplo, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></code></pre>
        </section>
        <aside class="panel">
            <h2>Objeto creado por PHP</h2>
            <p>La página construyó un producto con nombre y precio; su método presenta esos datos.</p>
            <div class="output-box"><strong>Descripción</strong><p><?= htmlspecialchars($producto->descripcion(), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p></div>
            <h3>Estructura del tema</h3><pre class="tree"><?= htmlspecialchars($estructura, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></pre>
        </aside>
    </div>
    <section class="task-card"><span class="pill">3 EJERCICIOS + PHPUNIT</span><h2>Estado y métodos</h2><ol><li><span class="level basico">Básico</span><code>tarea/Contador.php</code>: mantiene, incrementa y reinicia el estado de un objeto.</li><li><span class="level intermedio">Intermedio</span><code>tarea/Producto.php</code>: combina propiedades privadas, constructor y descuento validado.</li><li><span class="level avanzado">Avanzado</span><code>tarea/CuentaBancaria.php</code>: protege el saldo al depositar y retirar montos válidos.</li></ol><p>Las pruebas crean objetos nuevos para comprobar el estado y sus transiciones.</p><code class="command">composer test:tema7</code></section>
    <?php $numeroTema = 7; require __DIR__ . '/../../includes/ampliacion-render.php'; ?>
    <footer class="site-footer">Tema 07 de 18 · Ya tienes las bases para continuar con encapsulamiento y composición</footer>
</main></body></html>
