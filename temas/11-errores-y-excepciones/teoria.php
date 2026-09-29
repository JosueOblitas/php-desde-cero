<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 11,
  "carpeta": "11-errores-y-excepciones",
  "titulo": "Errores y excepciones",
  "categoria": "errores",
  "descripcion": "Señala datos inválidos y recupera procesos cuando una entrada falla.",
  "subtitulo": "El error forma parte del contrato",
  "conceptos": [
    "throw detiene la operación actual y entrega una excepción a quien la llamó.",
    "try/catch permite responder a un fallo esperado sin ocultar los demás.",
    "InvalidArgumentException representa un argumento inválido y DomainException una regla del dominio.",
    "Al procesar un lote, registra qué elemento falló para seguir con los demás."
  ],
  "codigo": "<?php\ntry {\n    throw new InvalidArgumentException('Dato inválido');\n} catch (InvalidArgumentException $error) {\n    echo 'Error controlado: ' . $error->getMessage();\n}",
  "explicacion_resultado": "La excepción se captura y la página muestra un mensaje controlado.",
  "nota": "Las pruebas revisan tanto el tipo de excepción como los datos que sí pudieron procesarse.",
  "siguiente": "Sigue con namespaces y Composer",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "dividir.php",
      "test": "DividirTest.php",
      "descripcion": "divide dos números y lanza InvalidArgumentException si el divisor es cero."
    },
    {
      "nivel": "intermedio",
      "archivo": "validar-edad.php",
      "test": "ValidarEdadTest.php",
      "descripcion": "acepta edades de 0 a 130 y lanza DomainException fuera de ese rango."
    },
    {
      "nivel": "avanzado",
      "archivo": "ImportadorEnteros.php",
      "test": "ImportadorEnterosTest.php",
      "descripcion": "procesa líneas, reúne enteros válidos y conserva los índices de entradas inválidas."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
try { throw new InvalidArgumentException('Dato inválido'); } catch (InvalidArgumentException $error) { $lesson['resultado'] = 'Error controlado: ' . $error->getMessage(); }
require __DIR__ . '/../../includes/teoria-template.php';
