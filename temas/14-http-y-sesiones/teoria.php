<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 14,
  "carpeta": "14-http-y-sesiones",
  "titulo": "HTTP, formularios y sesiones",
  "categoria": "web",
  "descripcion": "Lee datos de una petición y conserva el estado que una persona necesita entre visitas.",
  "subtitulo": "Cada visita es una petición nueva",
  "conceptos": [
    "$_GET contiene parámetros de la URL y $_POST contiene los datos enviados por un formulario.",
    "$_SERVER['REQUEST_METHOD'] indica si la petición usa GET, POST u otro método.",
    "Valida los datos recibidos antes de usarlos; no confíes en que el formulario envió lo esperado.",
    "session_start() permite acceder a $_SESSION para conservar datos entre peticiones.",
    "setcookie() envía una cookie en la respuesta; debe llamarse antes de enviar contenido HTML."
  ],
  "codigo": "<?php\nsession_start();\n$metodo = $_SERVER['REQUEST_METHOD'] ?? 'CLI';\n$nombre = trim((string) ($_POST['nombre'] ?? ''));\nif ($metodo === 'POST' && $nombre !== '') {\n    $_SESSION['nombre'] = $nombre;\n}",
  "explicacion_resultado": "La página informa el método HTTP con el que se solicitó esta lección.",
  "nota": "Las pruebas simulan GET, POST y una sesión con arrays, para que funcionen sin servidor externo.",
  "siguiente": "Sigue con PDO y bases de datos",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "leer-pagina.php",
      "test": "LeerPaginaTest.php",
      "descripcion": "lee una página positiva desde la query; usa 1 si falta o es inválida."
    },
    {
      "nivel": "intermedio",
      "archivo": "validar-formulario.php",
      "test": "ValidarFormularioTest.php",
      "descripcion": "normaliza nombre y correo y devuelve errores de los campos inválidos."
    },
    {
      "nivel": "avanzado",
      "archivo": "CarritoSesion.php",
      "test": "CarritoSesionTest.php",
      "descripcion": "guarda cantidades por producto en una sesión compartida entre objetos."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = 'Método HTTP: ' . ($_SERVER['REQUEST_METHOD'] ?? 'CLI');
require __DIR__ . '/../../includes/teoria-template.php';
