<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 8,
  "carpeta": "08-cadenas-y-regex",
  "titulo": "Cadenas y expresiones regulares",
  "categoria": "texto",
  "descripcion": "Trabaja con texto UTF-8, espacios y patrones sin perder caracteres.",
  "subtitulo": "Texto que puedes transformar y validar",
  "conceptos": [
    "trim() elimina espacios de los extremos de una cadena.",
    "mb_strtolower() y mb_strtoupper() respetan caracteres multibyte como á y ñ.",
    "preg_match() compara una cadena con un patrón; ^ y $ marcan sus límites.",
    "Usa el modificador u en patrones que procesan texto UTF-8."
  ],
  "codigo": "<?php\n$texto = '  PHP y Unicode  ';\necho mb_strtolower(trim($texto), 'UTF-8');\n\n$codigo = 'PE-123';\n$valido = preg_match('/^[A-Z]{2}-[0-9]{3}$/D', $codigo) === 1;",
  "explicacion_resultado": "La página ejecuta una transformación multibyte sobre una cadena.",
  "nota": "Los tests incluyen acentos, espacios extra y entradas que casi coinciden con el patrón.",
  "siguiente": "Sigue con fechas y tiempo",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "normalizar-texto.php",
      "test": "NormalizarTextoTest.php",
      "descripcion": "quita espacios externos y devuelve el texto en minúsculas UTF-8."
    },
    {
      "nivel": "intermedio",
      "archivo": "contar-palabras.php",
      "test": "ContarPalabrasTest.php",
      "descripcion": "cuenta palabras separadas por uno o más espacios, tabuladores o saltos de línea."
    },
    {
      "nivel": "avanzado",
      "archivo": "validar-codigo.php",
      "test": "ValidarCodigoTest.php",
      "descripcion": "valida códigos con dos letras mayúsculas, un guion y tres dígitos exactos."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = mb_strtoupper('PHP y texto', 'UTF-8');
require __DIR__ . '/../../includes/teoria-template.php';
