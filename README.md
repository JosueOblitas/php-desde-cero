# PHP desde cero

Curso práctico de PHP 8.3 organizado en 18 temas. Cada tema contiene teoría para el navegador, tres ejercicios de dificultad creciente y un cuarto reto integrador. Cada ejercicio tiene pruebas PHPUnit.

## Requisitos

- PHP 8.3 o compatible con `^8.3`
- Composer
- Extensiones `mbstring` y `pdo_sqlite` para los temas de texto y bases de datos

## Preparar el curso

Desde esta carpeta instala PHPUnit:

```bash
composer install
```

## Abrir las lecciones en el navegador

En una terminal, desde la carpeta del proyecto, inicia el servidor integrado de PHP:

```bash
php -S localhost:8000
```

Abre <http://localhost:8000>. Cada lección también tiene su propia página en `temas/<tema>/teoria.php`.

## Hacer las tareas y ejecutar PHPUnit

Completa los bloques `TODO` en los archivos de `tarea/` de cada tema. Cada ejercicio tiene su prueba correspondiente en `tests/`. Ejecuta una lección o todas desde la raíz:

```bash
composer test:tema1
composer test:tema2
composer test:tema3
composer test:tema4
composer test:tema5
composer test:tema6
composer test:tema7
composer test:tema8
composer test:tema9
composer test:tema10
composer test:tema11
composer test:tema12
composer test:tema13
composer test:tema14
composer test:tema15
composer test:tema16
composer test:tema17
composer test:tema18
composer test
```

Al comenzar, las pruebas fallarán a propósito porque los ejercicios tienen `TODO`. Cuando completes cada archivo, usa su comando para comprobarlo; PHPUnit mostrará en verde los ejercicios correctos.

## Cómo avanzar

Dentro de cada lección, resuelve en orden **básico → intermedio → avanzado → reto integrador**. El primero practica una operación concreta; el segundo combina conceptos; el tercero incluye casos límite o varias piezas que colaboran; el cuarto aplica el tema a un problema nuevo. La sección «Entiende el porqué» añade otro ejemplo y preguntas para comprobar tu comprensión antes de resolver el reto.

Puedes ejecutar una sola clase de prueba mientras trabajas:

```bash
vendor/bin/phpunit temas/01-sintaxis-y-salida/tests/SaludoTest.php
```

Cuando PHPUnit muestra `Expected` y `Actual`, compara esos valores con la regla escrita en `teoria.php` y con el `TODO` del archivo en `tarea/`. La suite completa solo estará verde después de resolver todos los ejercicios.

## Ruta completa

1. Sintaxis y salida
2. Variables y tipos
3. Operadores y condicionales
4. Arrays
5. Bucles
6. Funciones
7. Clases y objetos
8. Cadenas y expresiones regulares
9. Fechas y tiempo
10. POO avanzada
11. Errores y excepciones
12. Namespaces y Composer
13. Archivos y JSON
14. HTTP, formularios y sesiones
15. PDO y bases de datos
16. Seguridad web
17. PHP moderno
18. CLI y configuración

Cada carpeta de tema contiene `teoria.php`, `tarea/` y `tests/`. La teoría explica los conceptos y muestra la estructura de archivos; en `tarea/` completarás cuatro ejercicios y en `tests/` encontrarás una clase de PHPUnit por ejercicio. El cuarto reto aparece debajo de los tres ejercicios iniciales en cada página.

El tema 12 usa autoload PSR-4. Después de cambiar `composer.json`, ejecuta `composer dump-autoload`; `composer install` también lo genera al preparar el proyecto.
