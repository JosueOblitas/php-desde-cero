<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 9,
  "carpeta": "09-fechas-y-tiempo",
  "titulo": "Fechas y tiempo",
  "categoria": "tiempo",
  "descripcion": "Usa fechas inmutables y zonas horarias para calcular intervalos sin alterar el valor original.",
  "subtitulo": "Una fecha representa un instante o un día",
  "conceptos": [
    "DateTimeImmutable devuelve un objeto nuevo al modificar una fecha.",
    "DateTimeZone especifica la zona horaria usada en el cálculo.",
    "format() convierte una fecha en texto para presentarla.",
    "format('N') devuelve el día de la semana entre 1 (lunes) y 7 (domingo)."
  ],
  "codigo": "<?php\n$fecha = new DateTimeImmutable('2024-02-28', new DateTimeZone('America/Lima'));\n$manana = $fecha->modify('+1 day');\necho $manana->format('d/m/Y'); // 29/02/2024",
  "explicacion_resultado": "PHP calcula el día siguiente en un año bisiesto.",
  "nota": "Las pruebas pasan por cambios de mes, fines de semana y fechas límite.",
  "siguiente": "Sigue con programación orientada a objetos avanzada",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "formatear-fecha.php",
      "test": "FormatearFechaTest.php",
      "descripcion": "convierte una fecha YYYY-MM-DD a DD/MM/YYYY."
    },
    {
      "nivel": "intermedio",
      "archivo": "sumar-dias.php",
      "test": "SumarDiasTest.php",
      "descripcion": "suma días sin modificar el objeto de fecha recibido."
    },
    {
      "nivel": "avanzado",
      "archivo": "contar-dias-habiles.php",
      "test": "DiasHabilesTest.php",
      "descripcion": "cuenta lunes a viernes entre dos fechas, incluidas; si la primera es posterior, devuelve cero."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = (new DateTimeImmutable('2024-02-28'))->modify('+1 day')->format('d/m/Y');
require __DIR__ . '/../../includes/teoria-template.php';
