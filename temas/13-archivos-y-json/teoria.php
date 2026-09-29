<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 13,
  "carpeta": "13-archivos-y-json",
  "titulo": "Archivos y JSON",
  "categoria": "persistencia",
  "descripcion": "Lee y guarda datos con las funciones de archivos y convierte estructuras a JSON.",
  "subtitulo": "De memoria a disco",
  "conceptos": [
    "file_get_contents() lee un archivo completo y file_put_contents() escribe contenido.",
    "json_encode() convierte valores PHP en JSON y json_decode() hace el camino inverso.",
    "JSON_THROW_ON_ERROR permite detectar datos JSON mal formados mediante excepciones.",
    "Para archivos grandes, leer línea por línea consume menos memoria que cargar todo."
  ],
  "codigo": "<?php\n$datos = ['tema' => 'PHP', 'nivel' => 13];\n$json = json_encode($datos, JSON_THROW_ON_ERROR);\necho $json;",
  "explicacion_resultado": "PHP convirtió un array asociativo en un documento JSON.",
  "nota": "Las pruebas usan archivos temporales; no requieren rutas del sistema ni datos externos.",
  "siguiente": "Sigue con HTTP, formularios y sesiones",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "leer-texto.php",
      "test": "LeerTextoTest.php",
      "descripcion": "lee un archivo de texto y devuelve vacío si no existe."
    },
    {
      "nivel": "intermedio",
      "archivo": "guardar-json.php",
      "test": "GuardarJsonTest.php",
      "descripcion": "guarda un array como JSON válido y conserva caracteres UTF-8."
    },
    {
      "nivel": "avanzado",
      "archivo": "importar-jsonl.php",
      "test": "ImportarJsonlTest.php",
      "descripcion": "lee JSON por líneas, conserva objetos válidos y reporta líneas mal formadas."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = json_encode(['tema' => 'PHP', 'nivel' => 13], JSON_THROW_ON_ERROR);
require __DIR__ . '/../../includes/teoria-template.php';
