<?php
declare(strict_types=1);

$json = <<<'JSON'
{
  "numero": 15,
  "carpeta": "15-pdo-y-bases-de-datos",
  "titulo": "PDO y bases de datos",
  "categoria": "datos",
  "descripcion": "Conecta PHP a una base de datos y escribe consultas parametrizadas con PDO.",
  "subtitulo": "Datos persistentes y consultas seguras",
  "conceptos": [
    "PDO ofrece una interfaz común para motores como SQLite y PostgreSQL.",
    "ERRMODE_EXCEPTION hace visibles los errores de conexión y de SQL.",
    "prepare() y execute() separan los datos de la sentencia SQL.",
    "Una consulta puede devolver una fila o ninguna; representa ese caso con null."
  ],
  "codigo": "<?php\n$pdo = new PDO('sqlite::memory:');\n$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n$sentencia = $pdo->prepare('SELECT :numero AS resultado');\n$sentencia->execute(['numero' => 42]);\necho $sentencia->fetchColumn();",
  "explicacion_resultado": "Esta lección comprueba los controladores PDO disponibles en tu PHP.",
  "nota": "Las pruebas usan SQLite en memoria. Cada prueba prepara sus propios datos y comprueba consultas con caracteres especiales.",
  "siguiente": "Sigue con seguridad web",
  "ejercicios": [
    {
      "nivel": "basico",
      "archivo": "crear-conexion.php",
      "test": "ConexionTest.php",
      "descripcion": "abre SQLite en memoria y activa el modo de excepciones de PDO."
    },
    {
      "nivel": "intermedio",
      "archivo": "crear-tabla.php",
      "test": "TablaUsuariosTest.php",
      "descripcion": "crea una tabla usuarios con id y correo único."
    },
    {
      "nivel": "avanzado",
      "archivo": "RepositorioUsuarios.php",
      "test": "RepositorioUsuariosTest.php",
      "descripcion": "inserta y busca usuarios con sentencias preparadas."
    }
  ]
}
JSON;
$lesson = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
$lesson['resultado'] = 'Controladores: ' . implode(', ', PDO::getAvailableDrivers());
require __DIR__ . '/../../includes/teoria-template.php';
