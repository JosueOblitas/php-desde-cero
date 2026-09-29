<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 16,
  "carpeta": "16-seguridad-web",
  "titulo": "Seguridad web",
  "categoria": "seguridad",
  "descripcion": "Protege la salida HTML, las contraseñas y las acciones que modifican datos.",
  "subtitulo": "Valida, escapa y compara",
  "conceptos": [
    "htmlspecialchars() convierte caracteres especiales antes de insertarlos en HTML.",
    "password_hash() crea un hash de contraseña y password_verify() comprueba la clave recibida.",
    "random_bytes() genera tokens impredecibles para formularios sensibles.",
    "hash_equals() compara tokens sin depender del punto en que aparece una diferencia."
  ],
  "codigo": "<?php\n$entrada = '<script>alert(1)</script>';\necho htmlspecialchars($entrada, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');",
  "explicacion_resultado": "La etiqueta peligrosa se presenta como texto, no se ejecuta.",
  "nota": "Las pruebas usan entradas con etiquetas, contraseñas incorrectas y tokens falsos.",
  "siguiente": "Sigue con PHP moderno",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "escapar-html.php",
      "test": "EscaparHtmlTest.php",
      "descripcion": "escapa texto UTF-8 para ponerlo dentro de HTML."
    },
    {
      "nivel": "intermedio",
      "archivo": "Contrasena.php",
      "test": "ContrasenaTest.php",
      "descripcion": "crea hashes y verifica contraseñas sin guardar el texto original."
    },
    {
      "nivel": "avanzado",
      "archivo": "TokenCsrf.php",
      "test": "TokenCsrfTest.php",
      "descripcion": "genera, guarda y valida un token CSRF en una sesión."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = htmlspecialchars('<script>alert(1)</script>', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
require __DIR__ . '/../../includes/teoria-template.php';
