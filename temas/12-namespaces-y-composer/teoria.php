<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 12,
  "carpeta": "12-namespaces-y-composer",
  "titulo": "Namespaces y Composer",
  "categoria": "organización",
  "descripcion": "Separa clases por nombre y deja que Composer las cargue desde la carpeta adecuada.",
  "subtitulo": "Nombres que reflejan carpetas",
  "conceptos": [
    "namespace evita choques entre clases que comparten un nombre corto.",
    "use importa un nombre completo para usarlo con una forma abreviada.",
    "PSR-4 relaciona un prefijo de namespace con una carpeta configurada en composer.json.",
    "composer dump-autoload regenera el mapa después de cambiar la configuración de autoload."
  ],
  "codigo": "<?php\nnamespace Curso\\Tema12;\n\nfinal class Saludo\n{\n    public function decir(string $nombre): string\n    {\n        return 'Hola, ' . $nombre;\n    }\n}",
  "explicacion_resultado": "El nombre completo de la clase incluye el namespace del tema.",
  "nota": "Las pruebas usan Composer para cargar estas clases; no necesitan require_once. El contrato Canal.php acompaña al reto avanzado.",
  "auxiliares": [
    "Canal.php"
  ],
  "siguiente": "Sigue con archivos y JSON",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "Saludo.php",
      "test": "SaludoNamespaceTest.php",
      "descripcion": "crea una clase con namespace y devuelve un saludo."
    },
    {
      "nivel": "intermedio",
      "archivo": "Calculadora.php",
      "test": "CalculadoraNamespaceTest.php",
      "descripcion": "importa DateTimeImmutable y suma días a una fecha."
    },
    {
      "nivel": "avanzado",
      "archivo": "Mensajero.php",
      "test": "MensajeroTest.php",
      "descripcion": "usa un contrato Canal cargado por PSR-4 e inyecta un canal al constructor."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = 'Curso\\Tema12\\Saludo';
require __DIR__ . '/../../includes/teoria-template.php';
