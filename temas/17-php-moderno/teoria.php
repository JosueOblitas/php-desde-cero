<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 17,
  "carpeta": "17-php-moderno",
  "titulo": "PHP moderno",
  "categoria": "lenguaje",
  "descripcion": "Exprésate con match, enums y generadores cuando cada herramienta simplifica el problema.",
  "subtitulo": "Herramientas del lenguaje actual",
  "conceptos": [
    "match devuelve un valor y compara de forma estricta.",
    "Un enum backed representa un conjunto cerrado de estados con valores persistibles.",
    "Un generador produce valores uno por uno con yield en lugar de construir toda la lista.",
    "Una closure o callable permite pasar comportamiento a otra función.",
    "Las propiedades readonly y los tipos de unión ayudan a expresar contratos explícitos."
  ],
  "codigo": "<?php\n$codigo = 200;\n$estado = match ($codigo) {\n    200 => 'correcto',\n    404 => 'no encontrado',\n    default => 'desconocido',\n};\necho $estado;",
  "explicacion_resultado": "La página clasifica una respuesta usando match.",
  "nota": "El reto avanzado comprueba que los lotes se producen de manera perezosa.",
  "siguiente": "Sigue con CLI y configuración",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "clasificar-estado.php",
      "test": "EstadoHttpTest.php",
      "descripcion": "clasifica códigos HTTP con match y un caso predeterminado."
    },
    {
      "nivel": "intermedio",
      "archivo": "EstadoPedido.php",
      "test": "EstadoPedidoTest.php",
      "descripcion": "añade etiquetas legibles a un enum respaldado por strings."
    },
    {
      "nivel": "avanzado",
      "archivo": "crear-lotes.php",
      "test": "CrearLotesTest.php",
      "descripcion": "genera lotes perezosos y permite transformar cada elemento mediante una closure."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = match (200) { 200 => 'correcto', 404 => 'no encontrado', default => 'desconocido' };
require __DIR__ . '/../../includes/teoria-template.php';
