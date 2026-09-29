<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 18,
  "carpeta": "18-cli-y-configuracion",
  "titulo": "CLI y configuración",
  "categoria": "herramientas",
  "descripcion": "Ejecuta PHP desde terminal, interpreta opciones y adapta un comando mediante configuración.",
  "subtitulo": "El mismo lenguaje fuera del navegador",
  "conceptos": [
    "PHP_SAPI indica cómo está ejecutándose PHP: CLI, servidor integrado u otra interfaz.",
    "$argv contiene los argumentos enviados al script en terminal.",
    "getenv() permite leer configuración del entorno sin escribirla en el código.",
    "Una salida CSV debe respetar comas y comillas para que otro programa pueda leerla."
  ],
  "codigo": "<?php\n// Ejemplo de terminal: php exportar.php --nombre=Ada\n$opcion = $argv[1] ?? '';\necho 'SAPI: ' . PHP_SAPI . ', opción: ' . $opcion;",
  "explicacion_resultado": "El resultado cambia según ejecutes la página en navegador o desde la terminal.",
  "nota": "Las pruebas pasan argumentos y configuración como datos, sin depender de variables reales del equipo.",
  "siguiente": "Fin de la ruta principal; puedes combinar estos temas en un proyecto",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "leer-opciones.php",
      "test": "LeerOpcionesTest.php",
      "descripcion": "convierte opciones --clave=valor de argv en un array."
    },
    {
      "nivel": "intermedio",
      "archivo": "obtener-configuracion.php",
      "test": "ConfiguracionTest.php",
      "descripcion": "lee una clave del entorno simulado y usa un valor predeterminado si falta."
    },
    {
      "nivel": "avanzado",
      "archivo": "ComandoExportar.php",
      "test": "ComandoExportarTest.php",
      "descripcion": "procesa argumentos y entorno para producir CSV válido."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = 'PHP_SAPI: ' . PHP_SAPI;
require __DIR__ . '/../../includes/teoria-template.php';
